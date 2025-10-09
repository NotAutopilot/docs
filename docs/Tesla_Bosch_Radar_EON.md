# Tesla Bosch Radar EON

The Bosch radar made for Tesla (Bosch MRRevo14, and with few different part numbers like 1038224-00-A/B or 1057551-00-B) have been used on Tesla Model S cars from October 2014 (AP1) until they have been replaced by the Continental radar with AP2.5). The main difference between 1038224-00-B and 1038224-00-A is that the A version does not have the heater element for winter weather (to melt snow and ice).

The radar has a range of about 160m and for the short beam a cone of 45°.

### Bosch radars

Many other car manufacturers use the same radar hardware, including Honda, Nissan, VW, Audi, etc. But Tesla (AFAIK) is the only one that reads and processes raw data from the radar instead of letting the radar make the decision about longitudinal control action needed (acceleration or deceleration).

```
This radar can ben used on any OP supported car. To insall the radar for a non-Tesla car please find a branch that has the code already done or modify your branch and add the code needed to make the radar talk to the Panda code for your car.
```

### Deconding the radar

With a little help from a group of enthusiasts, we were able to reverse engineer all the messages that AP sends to the radar in order to make it "talk". Then we identified the structure of the CAN messages that describe each of the 32 objects this radar can detect. Signals like longitudinal distance, lateral distance (vs radar), longitudinal relative speed, lateral relative speed, longitudinal acceleration, certainty of detection, etc are all now processed and sent to the radar daemon of Open Pilot, improving longitudinal control for the car.

### What you need

In order to get the radar working on your car, you need to buy a radar, a mounting bracket (few options here), a connector and then to create a harness and run the cable back to the [Giraffe](Tesla_Giraffe.md) . As a first temporary setup for my research, I used an Audi bracket which I installed on my car's nose cone. Then I created the harness and connected it for both CAN and power to my Giraffe rev B using a car relay. Please also make sure you add the 120Ω resistor between CAN+ and CAN-.

For a permanent install I recommend following the diagram in the Tesla Bosch Radar Wiring Harness image at the top of the page. This setup uses the EPAS power (which is ignition power) to trigger a relay and feed power to both the radar electronics and the heater unit of the radar. Make sure the line from the battery is fused. Please also make sure you add the 120Ω resistor between CAN+ and CAN-. Also please use the [AWG chart](AWG_chart.md) to select the right wire needed for your setup.

```
If you have a Giraffe rev A, you will have to solder the CAN wires from the radar directly to the Giraffe. We are using the middle CAN of the Panda (CAN2 when you think of them as CAN1-CH, CAN3-EPAS) and the pins where you should solder your connector are marked in this diagrams. 
Also, you will have to add the same 120Ω resistor between CAN+ and CAN-.
```

```
For other cars that want to use the Tesla Bosch Radar, please find an unused CAN in your Panda safety implementation and use that CAN to communicate with the radar. The radar has to be on its own specific CAN because any message outside of the ones that it is supposed to receive will make it stop working.
```

Warning for Giraffe Rev B: Some jst2 cables have red/black set up so they won't match can+/can- on giraffe. So make sure can+ goes to the side of the connector on the giraffe labelled +.

### Panda code changes (non-Tesla cars)

```
If you are on one of my Tesla OP branches (0.5.10 and above), the Panda code already has all you need to get the Tesla Bosch Radar working.
```

If you want to implement the code for another car, you will have to modify the code as follow:

- find an existing CAN message on your car that is generated at 100Hz. We will use this message as a clock to trigger all the other messages needed by radar.
- take a look at my [test_teslaradar](https://github.com/Bog Gyver/openpilot/tree/test_teslaradar) branch which uses the fake message code in [safety_teslaradar.h](https://github.com/Bog Gyver/openpilot/blob/test_teslaradar/panda/board/safety/safety_teslaradar.h)
- edit**safety_yourcar.h**(specific for your car) and add the following:

- add the include for safety_teslaradar.h at the top
```
#include "safety_teslaradar.h"
```

- in the rx_hook function, call the radar rx hook
```
teslaradar_rx_hook(to_push);
```

- in the rx_hook function, find the CAN message that provides the speed and parse it (this is a Honda example) saving the value in the*actual_speed_kph*variable
```
//speed for radar
 if ((to_push->RIR>>21) == 0x309) {
 // first 2 bytes
 actual_speed_kph = (int)((((to_push->RDLR & 0x FF) << 8) + ((to_push->RDLR >>8) & 0x FF))*0.01);
 }
```

- in the fwd_hook function, make sure you do not forward any of the radar messages to any other CAN bus (in this example, the radar is on CAN bus 2)
```
if(bus_num == 2) {
 return -1;
 }
```

- in the tx_hook function add interceptor for the message used to send info to the radar; in this example we use 0x560 as the CAN message ID; it this does not work for your car (already in use) you will have to change it to another ID that is not in use
```
//check if this is a teslaradar vin message
 //capture message for radar VIN and settings
 if ((to_send->RIR >> 21) == 0x560) {
 int id = (to_send->RDLR & 0x FF);
 int radar Vin_b1 = ((to_send->RDLR >> 8) & 0x FF);
 int radar Vin_b2 = ((to_send->RDLR >> 16) & 0x FF);
 int radar Vin_b3 = ((to_send->RDLR >> 24) & 0x FF);
 int radar Vin_b4 = (to_send->RDHR & 0x FF);
 int radar Vin_b5 = ((to_send->RDHR >> 8) & 0x FF);
 int radar Vin_b6 = ((to_send->RDHR >> 16) & 0x FF);
 int radar Vin_b7 = ((to_send->RDHR >> 24) & 0x FF);
 if (id == 0) {
 tesla_radar_should_send = (radar Vin_b2 & 0x01);
 radar Position = ((radar Vin_b2 >> 1) & 0x03);
 radar Epas Type = ((radar Vin_b2 >> 3) & 0x07);
 tesla_radar_trigger_message_id = (radar Vin_b3 << 8) + radar Vin_b4;
 tesla_radar_can = radar Vin_b1;
 radar_VIN [0] = radar Vin_b5;
 radar_VIN [1] = radar Vin_b6;
 radar_VIN [2] = radar Vin_b7;
 tesla_radar_vin_complete = tesla_radar_vin_complete | 1;
 }
 if (id == 1) {
 radar_VIN [3] = radar Vin_b1;
 radar_VIN [4] = radar Vin_b2;
 radar_VIN [5] = radar Vin_b3;
 radar_VIN [6] = radar Vin_b4;
 radar_VIN [7] = radar Vin_b5;
 radar_VIN [8] = radar Vin_b6;
 radar_VIN [9] = radar Vin_b7;
 tesla_radar_vin_complete = tesla_radar_vin_complete | 2;
 }
 if (id == 2) {
 radar_VIN [10] = radar Vin_b1;
 radar_VIN [11] = radar Vin_b2;
 radar_VIN [12] = radar Vin_b3;
 radar_VIN [13] = radar Vin_b4;
 radar_VIN [14] = radar Vin_b5;
 radar_VIN [15] = radar Vin_b6;
 radar_VIN [16] = radar Vin_b7;
 tesla_radar_vin_complete = tesla_radar_vin_complete | 4;
 }
 else {
 return 0;
 }
 }
```

### OP Code Changes (non-Tesla cars)

```
If you are on one of my Tesla OP branches (0.5.10 and above), the OP code already has all you need to get the Tesla Bosch Radar working.
```

If you want to implement the code for another car, you will have to modify the code as follow:

- go to /data/openpilot/selfdrive/car/yourcar (of course, yourcar matches one of the supported OP cars like honda/toyota/etc.)
- edit**yourcarcan.py**and add the code needed to send the VIN and other info to the Panda

```
def create_radar_VIN_msg(id,radar VIN,radar CAN,radar Trigger Message,use Radar,radar Position,radar Epas Type):
 msg_id = 0x560
 msg_len = 8
 msg = create_string_buffer(msg_len)
 if id == 0:
 struct.pack_into('BBBBBBBB', msg, 0, id,radar CAN,use Radar + (radar Position << 1) + (radar Epas Type << 3), ((radar Trigger Message >> 8) & 0x FF),(radar Trigger Message & 0x FF),ord(radar VIN [0]),ord(radar VIN [1]),ord(radar VIN [2]))
 if id == 1:
 struct.pack_into('BBBBBBBB', msg, 0, id,ord(radar VIN [3]),ord(radar VIN [4]),ord(radar VIN [5]),ord(radar VIN [6]),ord(radar VIN [7]),ord(radar VIN [8]),ord(radar VIN [9]))
 if id == 2:
 struct.pack_into('BBBBBBBB', msg, 0, id,ord(radar VIN [10]),ord(radar VIN [11]),ord(radar VIN [12]),ord(radar VIN [13]),ord(radar VIN [14]),ord(radar VIN [15]),ord(radar VIN [16]))
 return [msg_id, 0, msg.raw, 0]
```

- edit**carcontroller.py**and add the code needed to send the VIN and other specific radar info to Panda

- in the __init__ portion add
```
self.radar Vin_idx = 0
```

- in the update portion add the below code, updating as needed the CAN bus to be used for radar (in this example 2) and the 100Hz message we will use to trigger messages (in this example 0x17c)
```
#if using radar, we need to send the VIN
if CS.use Tesla Radar and (frame % 100 == 0):
 can_sends.append(hondacan.create_radar_VIN_msg(self.radar Vin_idx, CS.radar VIN, 2, 0x17c, CS.use Tesla Radar, CS.radar Position, CS.radar Epas Type))
 self.radar Vin_idx += 1
 self.radar Vin_idx = self.radar Vin_idx % 3
```

- copy from my repo the [readconfig_min.py](https://github.com/Bog Gyver/openpilot/blob/test_teslaradar/selfdrive/car/tesla/readconfig_min.sh) and rename it**readconfig.py**; once you are done with all the code changes and reboot the EON, this will create a minimal [Open Pilot Configuration File](Open Pilot_Configuration_File.md) at /data/bb_openpilot.cfg with the values needed for radar
- edit**carstate.py**

- add the import for the readconfig.py
```
from selfdrive.car.honda.readconfig import read_config_file
```

- add definition in __init__ for the variables needed by radar
```
### START OF MAIN CONFIG OPTIONS ###
 ### Do NOT modify here, modify in /data/bb_openpilot.cfg and reboot
 self.use Tesla Radar = False
 self.radar VIN = " "
 self.radar Offset = 0.
 self.radar Position = 0
 self.radar Epas Type = 0
 #read config file
 read_config_file(self)
 ### END OF MAIN CONFIG OPTIONS ###
```

- copy from my repo the [radar_interface.py](https://github.com/Bog Gyver/openpilot/blob/test_teslaradar/selfdrive/car/tesla/radar_interface.py) file and modify if needed
- copy from my repo the [radard.py](https://github.com/Bog Gyver/openpilot/blob/test_teslaradar/selfdrive/controls/radard.py) to /data/openpilot/selfdrive/controls and modify as needed
- copy from my repo the [radar_helpers.py](https://github.com/Bog Gyver/openpilot/blob/test_teslaradar/selfdrive/controls/lib/radar_helpers.py) to /data/openpilot/selfdrive/controls/lib and modify as needed

### Obtain the VIN programmed in your radar

Chances are you bought your Tesla Bosch Radar on ebay and was previously installed and programmed in a car (so it will only respond if we send the right VIN, epay type and position). The first step in getting the radar to send data is to obtain the VIN that was previously programmed. To get the VIN you will have to use the [read Radar Vin.py](https://github.com/Bog Gyver/openpilot/blob/test_teslaradar/selfdrive/car/tesla/radar_tools/read Radar Vin.py) script (if you are on one of my branches the file is located in`/data/openpilot/selfdrive/car/tesla/radar_tools/`).

Once you have the scrip do the following steps:

- SSH into the EON
- `cd /data/openpilot/selfdrive/car/tesla/radar_tools/`(or go to the location where you saved the script)
- kill Open Pilot:- `tmux kill-session -t comma`
- set the python environment variable- `export PYTHONPATH="/data/openpilot/"`
- run the read Radar Vin.py script- `python read Radar Vin.py`

The 17 character VIN number will be displayed in the output of the script. Write it down. It should look something like`5YJSA1E41FF156789`

### Modifying the configuration file for radar

Now that we have the VIN, we need to configure the [Open Pilot Configuration File](Open Pilot_Configuration_File.md) with the needed parameters.

> [OP_CONFIG]
use_tesla_radar = True
enable_radar_emulation = True
radar_vin = YOUR_RADAR_VIN_HERE
radar_offset = 0.0
radar_epas_type = 0
radar_position = 0

So make sure that the**use_tesla_radar**variable is set to True.

**radar_vin**need to match the VIN you obtain from the read Radar Vin.py script (do not put any quotes or any other characters on that line, just the VIN). Example:**5YJSA1E41FF156789**

**radar_offset**has to be changed only if your radar is not centered on the car (some cars have it closer to the left side of the car, in which case the offset should be positive and equal to the distance between the center of the radar and center of the car, in meters; for example 58cm will be 0.58 for offset).

```
The following settings need to match the values that were on the donor car, not your car. Use the VIN Decoder to understand the Tesla model, year and other information that can help you program these parameters.
```

**radar_epas_type**is the type of EPAS that was on the donor car. The value can be between 0 and 4:

- 0 - Bosch L538
- 1 - Bosch L405
- 2 - Mando FGR64
- 3 - Mando VGR66
- 4 - Mando VGR66 Gen3

For pre-facelift AP1 cars you will find mostly 0 or 1. Post facelift cars are mostly 3 or 4. But nothing can give you the exact value and you might have to try various values until RADC_a062_str Rack Mismatch in Tesla Radar Alert Matrix message is 0. See the [troubleshooting section](Tesla_Bosch_Radar.md) to learn how to look at the Tesla Radar Alert Matrix message in [Cabana](Cabana.md) .

**radar_position**is the position of the radar in the donor car. The value can be between 0 and 2:

- 0 - Model S (pre facelift)
- 1 - Model S (post facelift)
- 2 - Model X

You can use the manufacturing date and model from [VIN Decoder](https://teslatap.com/vin-decoder/) to estimate your value. 2014 and 2015 Model S will always be 0. 2017 and above Model S will be 1. Model X will be always 2. But again nothing will give you the exact value and you might have to try 0 or 1 if the Model S was manufactured in 2016 because it could be 0 (pre April 2016) or 1 (post April 2016). The value of RADC_a061_rad Position Mismatch in Tesla Radar Alert Matrix message should be 0 if programmed correctly. See the [troubleshooting section](Tesla_Bosch_Radar.md) to learn how to look at the Tesla Radar Alert Matrix message in [Cabana](Cabana.md) .

You can find an explanation of each of the parameters [here](Open Pilot_Configuration_File.md) .

Once done, reboot your EON.

### Calibrating your radar

Determine the center of car Most likely the radar will have to be calibrated in order to ensure the correct data being fed into Open Pilot. In order to calibrate your radar you will need:

- the [calibrate Radar.py](https://github.com/Bog Gyver/openpilot/blob/test_teslaradar/selfdrive/car/tesla/radar_tools/calibrate Radar.py) script which for those running on one of my Tesla branches is located in**/data/openpilot/selfdrive/car/tesla/radar_tools/**
- a 4ft (120 cm) metal pole that can stay vertically by itself (I personally use a microphone stand)
- tape measure
- chalk
- computer or phone to SSH into EON and view data

First, we need to create a straight line that is perfectly centered on the car (for this you will need another person to hold one end of the tape). Follow these steps:

- start from the left front wheel well, measure 8 ft (2.5m) out towards the center of the car and draw an arch of the circle using the chalk.
- repeat the process from the right front wheel
- the place where your two arches intersect will be point A. (see blue lines in diagram)
- repeat the process above but measure out 16.5 ft (5 m)
- the place where your two new arches intersect will be point B (see red lines in diagram)
- connect points A and B with a line; this line is now along the center of the car (see green line in diagram)

Now that we have the line that marks the zero d Y line, let's start the calibration script:

- start OP (OP might stop when you leave the car; what i did was to put open the driver window, put a heavy backpack on the driver seat, connect the driver seatbelt and turn the car on; this way it ensured that OP remained running)
- SSH into EON and go to the folder where the calibrate Radar.py is- `cd /data/openpilot/selfdrive/car/tesla/radar_tools/`
- set the python environment- `export PYTHONPATH="/data/openpilot/"`
- run the calibration script- `python calibrate Radar.py`

The script will start showing data for objects between 8 ft (2.5 m) and 15 ft (4.5 m) in front of the car.

Now the calibration process starts:

- place the metal pole (again, i used a microphne stand) in the middle of the line that connects A and B
- look at the terminal window running the calibration script and check x and y values for distance:- you should see data from the script showing**d Rel**and**d Y**as some of the points; keep in mind the values are always in meters
- measure the distance between the radar and the pole: it should match the**d Rel**distance
- **d Y**should be 0.0
- if you can not see the pole at all or**d Rel**is greater than the real measured distance, you will need to adjust the radar vertically until they match.
- if**d Y**is not zero, adjust the radar position Left or Right until**d Y**is 0.0
- once**d Y**is 0.0 move the pole along the line connecting A and B repeating the above process
- you are done when no matter where you place the pole between A and B,**d Y**is always 0.0

### Troubleshooting the Tesla Bosch Radar

The radar send data for the first 5 seconds no matter what we send to it. But if we are sending the wrong info (VIN, position or epas) it will stop sending changes to the data after 5 seconds. At this point we have to see what exactly is happening with the radar by looking at the allerts it generates.

You can use [cabana](Cabana.md) and paste the following code in the DBC in order to understand what errors the radar is sending and what you need to change. Once you opened your cabana drive, click Load DBC, then Upload, and copy and paste the content from below to the DBC area. Then just look at the message called Tesla Radar Alert Matrix and see if you have any errors. Calibration warnings will not stop radar from operating.
(Make sure you're looking at 1:501 for Tesla Radar Alert Matrix, not 0:501)

```
VERSION ""
NS_ : 
 NS_DESC_
 CM_
 BA_DEF_
 BA_
 VAL_
 CAT_DEF_
 CAT_
 FILTER
 BA_DEF_DEF_
 EV_DATA_
 ENVVAR_DATA_
 SGTYPE_
 SGTYPE_VAL_
 BA_DEF_SGTYPE_
 BA_SGTYPE_
 SIG_TYPE_REF_
 VAL_TABLE_
 SIG_GROUP_
 SIG_VALTYPE_
 SIGTYPE_VALTYPE_
 BO_TX_BU_
 BA_DEF_REL_
 BA_REL_
 BA_DEF_DEF_REL_
 BU_SG_REL_
 BU_EV_REL_
 BU_BO_REL_
 SG_MUL_VAL_
BS_:
BU_: Front Camera Radar
BO_ 769 Tesla Radar Sgu Info: 8 Radar
 SG_ RADC_Vertical Misalignment : 0|8@1+ (1,0) [0|255] "" Front Camera
 SG_ RADC_SCUTemperature : 8|8@1+ (1,-128) [-128|127] "" Front Camera
 SG_ RADC_VMA_Plaus : 16|8@1+ (1,0) [0|255] "" Front Camera
 SG_ RADC_SGU_ITC : 24|8@1+ (1,0) [0|255] "" Front Camera
 SG_ RADC_Horizont Misalignment : 32|12@1+ (1,0) [0|4096] "" Front Camera
 SG_ RADC_Sensor Dirty : 44|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_HWFail : 45|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_SGUFail : 46|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_SGUInfo Consist Bit : 47|1@1+ (1,0) [0|1] "" Front Camera
BO_ 770 Tesla Radar Tgu Info: 8 Radar
 SG_ RADC_ACCTarg Obj1_sgu Index : 0|6@1+ (1,0) [0|63] "" Front Camera
 SG_ RADC_ACCTarg Obj2_sgu Index : 6|6@1+ (1,0) [0|63] "" Front Camera
 SG_ RADC_ACCTarg Obj3_sgu Index : 12|6@1+ (1,0) [0|63] "" Front Camera
 SG_ RADC_ACCTarg Obj4_sgu Index : 18|6@1+ (1,0) [0|63] "" Front Camera
 SG_ RADC_ACCTarg Obj5_sgu Index : 24|6@1+ (1,0) [0|63] "" Front Camera
 SG_ unused30 : 30|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_TGUInfo Consist Bit : 31|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_ACCTarg Obj1_d BPower : 32|16@1+ (1,0) [0|65535] "" Front Camera
 SG_ RADC_ACCTarg Obj5_d BPower : 48|16@1+ (1,0) [0|65535] "" Front Camera 
BO_ 1281 Tesla Radar Alert Matrix: 8 Radar
 SG_ RADC_a001_ecu Internal Perf : 0|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a002_flash Performance : 1|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a003_v Bat High : 2|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a004_adjustment Not Done : 3|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a005_adjustment Req : 4|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a006_adjustment Not Ok : 5|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a007_sensor Blinded : 6|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a008_plant Mode Active : 7|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a009_config Mismatch : 8|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a010_can Bus Off : 9|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a011_bdy MIA : 10|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a012_esp MIA : 11|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a013_gtw MIA : 12|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a014_sccm MIA : 13|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a015_adas MIA : 14|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a016_bdy Invalid Count : 15|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a017_adas Invalid Count : 16|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a018_esp Invalid Count : 17|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a019_sccm Invalid Count : 18|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a020_bdy Invalid Chk Sm : 19|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a021_esp Invalid Chk Sm : 20|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a022_sccm Invalid Chk Sm : 21|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a023_sccm Invalid Chk Sm : 22|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a024_abs Validity : 23|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a025_amb TValidity : 24|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a026_brake Validity : 25|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a027_Cntry Cd Validity : 26|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a028_esp Validity : 27|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a029_long Acc Off Validity : 28|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a030_long Acc Validity : 29|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a031_odo Validity : 30|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a032_gear Validity : 31|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a033_steer Ang Validity : 32|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a034_steer Ang Spd Validity : 33|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a035_indctr Validity : 34|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a036_veh Stand Still Validity : 35|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a037_vin Validity : 36|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a038_whl Rot Validity : 37|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a039_whl Spd Validity : 38|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a040_whl Stand Still Validity : 39|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a041_wiper Validity : 40|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a042_xwd Validity : 41|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a043_yaw Off Validity : 42|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a044_yaw Validity : 43|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a045_bsd Sanity : 44|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a046_rcta Sanity : 45|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a047_lcw Sanity : 46|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a048_steer Ang Off Sanity : 47|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a049_tire Size Sanity : 48|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a050_velocity Sanity : 49|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a051_yaw Sanity : 50|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a052_radome Htr Inop : 51|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a053_espmod Validity : 52|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a054_gtwmod Validity : 53|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a055_stwmod Validity : 54|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a056_bcmod Validity : 55|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a057_dimod Validity : 56|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a058_opmod Validity : 57|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a059_drmi Invalid Chk Sm : 58|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a060_drmi Invalid Count : 59|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a061_rad Position Mismatch : 60|1@1+ (1,0) [0|1] "" Front Camera
 SG_ RADC_a062_str Rack Mismatch : 61|1@1+ (1,0) [0|1] "" Front Camera
 SG_ unused62 : 62|2@1+ (1,0) [0|3] "" Front Camera
```