# Tesla Bosch Radar

If you need instructions for the Tesla Bosch Radar to use with EON or other (non Tesla) cars, the information can be found[here](Tesla_Bosch_Radar_EON.md).

![Tesla Bosch Radar Wiring Harness for Tesla Unity and Tinkla OBD-C Adapter](images/Tesla_Radar_Wiring_Harness_for_Tesla_Unity_and_Tinkla_OBD-C_Adapter.png)

The Bosch radar made for Tesla (Bosch MRRevo14, and with few different part numbers like 1038224-00-A/B or 1057551-00-B) have been used on Tesla Model S cars from October 2014 (AP1) until they have been replaced by the Continental radar with AP2.5). The main difference between 1038224-00-B and 1038224-00-A is that the A version does not have the heater element for winter weather (to melt snow and ice).

The radar has a range of about 160m and for the short beam a cone of 45°.

### Bosch radars

Many other car manufacturers use the same radar hardware, including Honda, Nissan, VW, Audi, etc. But Tesla (AFAIK) is the only one that reads and processes raw data from the radar instead of letting the radar make the decision about longitudinal control action needed (acceleration or deceleration).

```
This radar can ben used on any OP supported car. To insall the radar for a non-Tesla car please find a branch that has the code already done or modify your branch and add the code needed to make the radar talk to the Panda code for your car. More info available here.
```

### Decoding the radar

With a little help from a group of enthusiasts, we were able to reverse engineer all the messages that AP sends to the radar in order to make it "talk". Then we identified the structure of the CAN messages that describe each of the 32 objects this radar can detect. Signals like longitudinal distance, lateral distance (vs radar), longitudinal relative speed, lateral relative speed, longitudinal acceleration, certainty of detection, etc are all now processed and sent to the radar daemon of OpenPilot, improving longitudinal control for the car.

### What you need

In order to get the radar working on your car, you need to buy[a radar](https://shop.tinkla.us/Tinkla-Radar-for-use-with-OpenPilot-on-PreAP-Tesla-Model-S-p521235662), a[mounting bracket](https://shop.tinkla.us/Tinkla-Radar-Bracket-for-Tesla-Model-S-Behind-Nosecone-p521235665), and a[radar harness](https://shop.tinkla.us/Tinkla-Radar-Harness-p514922906)and run the cable back to theTinkla OBD-C Adapter.

```
DIY people can also follow the old method using a 3D printed mount and a home-made harness. Keep in mind these mounts stay farther back, are influenced by the harness and 12V post that are close to them AND are not adjustable, aka can not be calibrated. But, if you like a challenge David has a very nice set of instructions.
```

### Installing the radar kit

Start by taking out the nose cone and disassembling the frunk completely (needed to connect the ground of the harness only).

The radar mount uses the mounting point for the 12V post (which is then relocated on the radar mount). Start by taking out the two screws that hold the 12V post. Make sure the rubber cap on the 12V post remains on at all times.

Once you remove the two screws, save them somewhere in case you want later to remove the bracket and install the 12V post back. We will not need them for this install. Set the 12V post aside.

Attach the radar bracket to the front bumper using the provided 5mm black screws and 5mm split lock washers. Ensure the bracket is well secured. Remove the provided 6mm lock nuts and washers from the two posts on the bracket and mount the 12V post. Add the flat washers and tighten the 6mm lock nuts.

Carefully install the radar. The connector for the harness will go up. once the top part is inserted and locked in position push in the bottom until it clicks.

Make sure the harness that runs along the bumper (which goes to the front lights and the park sensors) goes over the radar harness connector in the back. Otherwise the metal in the harness will affect the radar.

Now that we are done installing the radar it is time to run the Tinkla Radar Harness. First connect the harness to the radar. Make sure it is well secured. Will require a little force as it is a water-tight harness.

Second step is to attach the ground. The ground post is behind the radar in the frunk area, as shown in the image below. Take the nut out, insert the ground connector there, then tighten well the nut back.

Next we will connect the 12v to the fuse box on the right side of the frunk as you look at the car from the front. Remove fuse F75 from the fuse box. Plug this fuse into the remaining slot in the fuse tap that came with the harness and plug the fuse tap in the location from which you removed the fuse.

Now for the can wires, start from the frunk area and go under the fender to the door, then through the door seal inside the car. There was already a hole in the door seal there for me. Your miles may vary.

Now just connect the JST2.5 connector at the end of the radar harness inside the OBD-C adapter in the radar port.

With the harness ran from front to back, now it's time to tidy it up a little and secure it in few places with some zip ties. Then put the frunk back together.

In openpilot, setup the radar configuration (see below), follow the instructions to perform the VIN Learn, and then follow the process for the radar calibration. Once done you can put the nosecone back and you're done.

```
When putting the nosecone back, please make sure the harness that goes to the park sensor does not get in front of the radar as you install the nosecone.
```

### Modifying the configuration settings for radar

It is important now to take the time to configure the[setting in Tesla Unity](Tesla_Unity_Configuration.md)in order to activate the radar. Before moving to the next step, please turn ON the toggle for**Use Tesla Radar**and appropriately configure the**Radar behind nosecone**and**Radar offset**. When using the Tinkla Radar Bracket which mounts the radar upside down, also enable the toggle for**Use Radar Upside Down**

### Programming your radar - VIN Learning

Chances are you bought your Tesla Bosch Radar on ebay and was previously installed and programmed in a car (so it will only respond if we send the right VIN, epas type and position). In order to make the radar work on your car you will have to go through the**Radar VIN Learn**process that can be started using the button with the same name at the bottom of the**Tesla preAP**settings page.

1. Ensure your Radar is installed in your vehicle and connected to theTinkla OBD-C Adapteror to your specific harness.
2. Ensure that all the[settings are configured](Tesla_Unity_Configuration.md)correctly for your radar, especially enabling the radar and specifying if it is behind the nose cone or not.
3. Using the**Radar VIN Learn**button under the**Tesla preAP**tab of[settings](Tesla_Unity_Configuration.md)start the programming process
4. Before hitting the**VIN Lrn**button, ensure your car is on (in P - Park) and continue to keep your foot on the brake throughout the process.
5. Hit the**VIN Lrn**button and the screen will show the progress. Your car might emit warnings and sounds during this process, which is normal.
6. Once process is complete, allow the car to go in "CAR OFF" mode and reboot your Comma devkit.
7. You are now ready to use your Tesla Bosch Radar.

### Calibrating your radar

![Determine the center of car](images/Determine_the_center_of_car.png)

Most likely the radar will have to be calibrated in order to ensure the correct data being fed into OpenPilot. In order to calibrate your radar you will need:

- the[calibrateRadar.py](https://github.com/BogGyver/openpilot/blob/test_teslaradar/selfdrive/car/tesla/radar_tools/calibrateRadar.py)script which for those running on one of my Tesla branches is located in**/data/openpilot/selfdrive/car/tesla/radar_tools/**
- a 4ft (120 cm) metal pole that can stay vertically by itself (I personally use a microphone stand)
- a[3.5mm hex head nut driver](https://www.amazon.com/dp/B07DXYSC6F?ref=ppx_pop_mob_ap_share)with a long neck that can fit through the front grille holes
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

Now that we have the line that marks the zero dY line, let's start the calibration script:

- start OP (OP might stop when you leave the car; what i did was to leave open the driver window, put a heavy backpack on the driver seat, connect the driver seatbelt and turn the car on; this way it ensured that OP remained running)
- SSH into EON and go to the folder where the calibrateRadar.py is- `cd /data/openpilot/selfdrive/car/tesla/radar_tools/`
- set the python environment- `export PYTHONPATH="/data/openpilot/"`
- run the calibration script- `python calibrateRadar.py`

The script will start showing data for objects between 8 ft (2.5 m) and 15 ft (4.5 m) in front of the car.

Now the calibration process starts:

- place the metal pole (again, i used a microphne stand) in the middle of the line that connects A and B
- look at the terminal window running the calibration script and check x and y values for distance:- you should see data from the script showing**dRel**and**dY**as some of the points; keep in mind the values are always in meters
- measure the distance between the radar and the pole: it should match the**dRel**distance
- **dY**should be 0.0
- if you can not see the pole at all or**dRel**is greater than the real measured distance, you will need to adjust the radar vertically until they match.
- if**dY**is not zero, adjust the radar position Left or Right until**dY**is 0.0
- once**dY**is 0.0 move the pole along the line connecting A and B repeating the above process
- you are done when no matter where you place the pole between A and B,**dY**is always 0.0

### Troubleshooting the Tesla Bosch Radar

The radar sends data for the first 5 seconds no matter what we send to it. But if we are sending the wrong info (VIN, position or epas) it will stop sending changes to the data after 5 seconds. At this point we have to see what exactly is happening with the radar by looking at the alerts it generates.

In order to do so you can run the script created to get the errors from the radar.

- start OP
- SSH into EON and go to the folder where the getRadarErrorCodes.py is- `cd /data/openpilot/selfdrive/car/tesla/radar_tools/`
- set the python environment- `export PYTHONPATH="/data/openpilot/"`
- run the calibration script- `python getRadarErrorCodes.py`

The script will start showing errors from the radar (if present) or say**No Errors**if everything works as expected.