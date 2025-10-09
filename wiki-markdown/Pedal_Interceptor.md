# Pedal Interceptor

```
This page is describing the usage of the Tesla Pedal Interceptor with Tesla Unity. If you are looking to use the Pedal Interceptor with the older version of Tesla OP that works on EON, please look at the Pedal Interceptor for EON page.
```

The Comma Pedal is used to provide advanced acceleration and regen braking capability on Tesla cars running Openpilot that do not have iBooster installed.

```
Without electric brakes (iBooster) the car only uses regenerative braking. This is not enough for sudden slowdowns. YOU MUST BE READY TO MANUALLY BRAKE AT ANY MOMENT.
```

### What it Does

The Comma Pedal is an accelerator pedal interceptor. It is a device that is inserted between a car's electronic accelerator pedal and the DU (Drive Unit). It detects the voltage from the accelerator pedal which represents the pedal's position. It then writes that same voltage back out to the DU as if the accelerator pedal had produced it.

The Comma Pedal has 4 main systems:

1. 2 Analog to Digital Convertors- This is used to read the voltage from the car's accelerator pedal into the Comma Pedal's processor. The accelerator pedal produces an output Voltage between 0 and 5 Volts.
2. 2 Digital to Analog Convertors- This is used to send voltage back to the car's DU as if the accelerator pedal had produced it.
3. 1 CAN Bus- The CAN Bus is the car's communication network. The Comma Pedal communicates with Openpilot using the CAN Bus. It connects to the Tinkla OBD-C Adapter.
4. 1 USB- This is used to program and monitor the Comma Pedal, itself.

When Openpilot is NOT engaged, the Comma Pedal reads the voltage from the accelerator pedal and just passes it along to the DU.

When Openpilot IS engaged with[longitudinal control](Longitudinal_Control__ACC.md), it gets the virtual accelerator pedal position from Openpilot and passes it on to the DU.

The Comma Pedal is also constantly sending the physical accelerator pedal's position to the CAN bus for Openpilot to read. This way you can increase speed temporarily without having to adjust max speed or disengage longitudinal control.

### Obtaining a Comma Pedal

You cannot buy a pre-built Comma Pedal from Comma. Fortunately we have a solution for you that only requires you to strip some wires and secure them with a screwdriver:

- you can find the Tinkla Pedal Interceptor[here in the Tinkla Store](https://shop.tinkla.us/Tinkla-Pedal-p487274387)
- you can find the connectors (limited quantity)[here in the Tinkla Store](https://shop.tinkla.us/Tesla-Pedal-Connectors-pair-p459771917)

You could also[build it yourself](https://github.com/commaai/neo/tree/master/pedal)(not recommended) or have one[fabricated through a service like Macrofab](https://medium.com/@joshuairl/comma-pedal-building-with-macrofab-6328bea791e8).

### Wiring a Tesla Pedal

If you purchased a Tinkla Pedal Interceptor together with the Tesla Pedal Connectors from our online store, you are in for a treat. Attaching the connectors to the pedal board is as easy as strip-twist-screw. 
The color codes for the Tesla Pedal Connectors wires are as follow:

- Red - 5V
- Black - GND
- Yellow - Sensor 1
- Blue - Sensor 2

The above image shows the correct connections between the connectors and the Tinkla Pedal Interceptor board.

In order to create your Tesla Pedal you need:

- 1x Comma Pedal board (for sources see above section)
- 1x[box to hold the board](https://www.amazon.com/LeMotech-Plastic-Electrical-Junction-72x42x23mm/dp/B07F3Y8L95/)if your Pedal doesn't already have a case (current ones ship with 3D printed cases). You will need to cut some[small openings](File_Pedal_in_box.png.md)on the sides (and in front of the RJ45) if you use this one.
- 1x set of "WPT-929" connectors (actually[Molex](https://www.molex.com/molex/products/datasheet.jsp?part=active/0314026110_CRIMP_HOUSINGS.xml)) -[fast shipping](https://www.amazon.com/dp/B07GZY4ST4),[slow shipping](https://de.aliexpress.com/item/32778798102.html)
- ~3ft of wire for the connectors in case your Pedal and connectors don't come with them (~AWG24)
- 1x SN-28B crimping tool (same one as used for EPAS cable -[fast shipping](https://www.amazon.com/Wovier-Compression-Ratcheting-0-1-1-0mm2-Wire-electrode/dp/B01CE4FAMW),[slow shipping](https://www.aliexpress.com/item/32843027501.html))
- 1x ethernet cable ~2ft (not crossover)

Use the diagram to connect the female WPT-929 pedal connector to the IN side of the pedal board and the male WSP-929 connector to the OUT side of the pedal connector.

### Connecting the Pedal for Tinkla Unity

Connecting the CAN BUS from the Pedal to theTinkla OBD-C Adapteris done via the RJ45 port using a standard ethernet cable.

Plug in the ethernet cable into the RJ45 port of the Pedal and the other end into the RJ45 port of the Tinkla OBD-C Adapter.

### Installing the Tesla Pedal

To install the Pedal, there are two steps:

1. connecting the board to the accelerator pedal
2. connecting the board to theTinkla OBD-C Adapter

This[video](https://www.youtube.com/watch?v=UiQved6gt2U)for a similar product shows you what you have to do in order to install the Pedal interceptor between the accelerator pedal and the car's existing connector. Take your time and watch the video first. The process is not complicated if you just follow it step by step.

Once that is complete, connect your ethernet cable to the Pedal and the other end to the RJ45 port on theTinkla OBD-C Adapter.

### Flashing the firmware for Tesla Pedal with Tesla Unity code

##### Flashing via CAN

With the introduction of Tesla Unity code, flashing the Tesla Pedal with the latest firmware is as easy as pressing a button in the Tesla preAP settings page. To flash the latest firmware to your Tesla Pedal:

1. Ensure your Pedal is installed in your vehicle and connected to theTinkla OBD-C Adapteror to your specific harness.
2. Ensure that all the[settings are configured](Tesla_Unity_Configuration.md)correctly for your pedal, especially enabling the pedal and setting up which CAN port it is connected to.
3. Using the**Flash Pedal**button under the**Tesla preAP**tab of[settings](Tesla_Unity_Configuration.md)start the firmware flashing process
4. Before hitting the**Flash**button, ensure your car is on (in P - Park) and continue to keep your foot on the brake throughout the process.
5. Hit the**Flash**button and the screen will show the progress. Your car might emit warnings and sounds during this process, which is normal.
6. Once process is complete, allow the car to go in "CAR OFF" mode and reboot your Comma devkit.
7. You are now ready to use your Tesla Pedal Interceptor.

##### Flashing via USB

**Flashing via USB involves more steps and is only necessary if flashing via CAN is not possible.**

If you built your Pedal yourself or it was shipped without any firmware, it will boot in DFU mode. To know which mode you're in look at the LED on the Pedal board: no light = DFU mode, slow blink = normal flash mode, fast blink = normal operations.

Entering Pedal Interceptor DFU Mode (image by @jfrux)To enter DFU mode, you will need a[USB-A to USB-A cable](https://www.amazon.com/dp/B09FDJFJ6Z/ref=cm_sw_em_r_mt_dp_QFSM3ZZ87K5WTECKYD12?_encoding=UTF8&psc=1)and to remove the Pedal Interceptor from your car. Connect one end of the USB cable to the pedal interceptor, then jump the small pin indicated in the attached image to one of the pins labeled 5V with a small wire. While holding that jump wire, connect the Pedal Interceptor to your computer via USB. This usually takes two people, one to do the jump and one to plug the USB into the laptop. Always have the USB plugged into the Pedal first, then laptop (it makes your life a lot easier). For how to put the pedal interceptor in the DFU mode, follow the instructions for[applying 5 Volt to a special point on the board](https://medium.com/@jfrux/flashing-the-comma-pedal-with-ubuntu-a83fb668f6e2#fcdf).

While in DFU mode, and connected to your computer running MacOS or Linux, you can flash your pedal using the same Unity code from your computer.

To do so you will need a local copy of the Unity code and to run few commands. Please see the sequence below that you have to run in a terminal window on your laptop.

```
cd ~
rm -rf openpilot
git clone https://github.com/boggyver/openpilot.git --depth 1 -b tesla_unity_releaseC2
cd openpilot/panda/board/pedal
./recover.sh
```

Sometimes you have to issue the command multiple times until it completes successfully. With the updated bootloader you'll be able to flash future updates via CAN.

Once done, unplug USB from the Pedal and install in car.

### Using the Tesla Pedal

```
Without electric brakes (iBooster) the car only uses regenerative braking. This is not enough for suddent slowdowns. YOU MUST BE READY TO MANUALLY BRAKE AT ANY MOMENT.
```

Out of the box, OP will use the Tesla CC (with stalk spamming) to control CC. This in our OP implementation is called Adaptive Cruise Control or ACC. CC on Tesla only works above 18 MPH (29 km/h).

If you turn off the Tesla CC by pressing on the CC stalk, OP will switch to Tesla Pedal mode (PCC). This will provide you with smooth adaptive cruise control by sending the right commands to your Tesla Pedal. Tesla Pedal works down to 1 MPH, but be careful, regen brakes stop working at 5 MPH (8 km/h).