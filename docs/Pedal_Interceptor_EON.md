# Pedal Interceptor EON

The Comma Pedal is used to provide advanced acceleration and regen braking capability on Tesla cars running Openpilot that do not have i Booster installed.

```
Without electric brakes (i Booster) the car only uses regenerative braking. This is not enough for sudden slowdowns. YOU MUST BE READY TO MANUALLY BRAKE AT ANY MOMENT.
```

### What it Does

The Comma Pedal is an accelerator pedal interceptor. It is a device that is inserted between a car's electronic accelerator pedal and the DU (Drive Unit). It detects the voltage from the accelerator pedal which represents the pedal's position. It then writes that same voltage back out to the DU as if the accelerator pedal had produced it.

The Comma Pedal has 4 main systems:

1. 2 Analog to Digital Convertors- This is used to read the voltage from the car's accelerator pedal into the Comma Pedal's processor. The accelerator pedal produces an output Voltage between 0 and 5 Volts.
2. 2 Digital to Analog Convertors- This is used to send voltage back to the car's DU as if the accelerator pedal had produced it.
3. 1 CAN Bus- The CAN Bus is the car's communication network. The Comma Pedal communicates with Openpilot using the CAN Bus. It connects to the Tesla Giraffe on CAN3.
4. 1 USB- This is used to program and monitor the Comma Pedal, itself.

When Openpilot is NOT engaged, the Comma Pedal reads the voltage from the accelerator pedal and just passes it along to the DU.

When Openpilot IS engaged with [longitudinal control](Longitudinal_Control__ACC.md) , it gets the virtual accelerator pedal position from Openpilot and passes it on to the DU.

The Comma Pedal is also constantly sending the physical accelerator pedal's position to the CAN bus for Openpilot to read. This way you can increase speed temporarily without having to adjust max speed or disengage longitudinal control.

### Obtaining a Comma Pedal

You cannot buy a pre-built Comma Pedal from Comma. Fortunately there are other people in the community manufacturing and selling them:

- [https://www.ebay.com/itm/comma-pedal-/224754086101?mkcid=16&mkevt=1&_trksid=p2349624.m46890.l49286&mkrid=711-127632-2357-0](https://www.ebay.com/itm/comma-pedal-/224754086101?mkcid=16&mkevt=1&_trksid=p2349624.m46890.l49286&mkrid=711-127632-2357-0) for the pedal hardware
- [https://www.ebay.com/itm/Tesla-Openpilot-Pedal-Interceptor-Connectors-/124807073952?mkcid=16&mkevt=1&_trksid=p2349624.m46890.l49286&mkrid=711-127632-2357-0](https://www.ebay.com/itm/Tesla-Openpilot-Pedal-Interceptor-Connectors-/124807073952?mkcid=16&mkevt=1&_trksid=p2349624.m46890.l49286&mkrid=711-127632-2357-0) for the Tesla specific connectors

Since they're currently always sold out as soon as new ones get in stock, you could also [build it yourself](https://github.com/commaai/neo/tree/master/pedal) (not recommended) or have one [fabricated through a service like Macrofab](https://medium.com/@joshuairl/comma-pedal-building-with-macrofab-6328bea791e8) .

### Wiring a Tesla Pedal

In order to create your Tesla Pedal you need:

- 1x Comma Pedal board (for sources see above section)
- 1x [box to hold the board](https://www.amazon.com/Le Motech-Plastic-Electrical-Junction-72x42x23mm/dp/B07F3Y8L95/) if your Pedal doesn't already have a case (current ones ship with 3D printed cases). You will need to cut some [small openings](images/Pedal_in_box.png) on the sides (and in front of the RJ45) if you use this one.
- 1x set of "WPT-929" connectors (actually [Molex](https://www.molex.com/molex/products/datasheet.jsp?part=active/0314026110_CRIMP_HOUSINGS.xml) ) -[fast shipping](https://www.amazon.com/dp/B07GZY4ST4) ,[slow shipping](https://de.aliexpress.com/item/32778798102.html)
- ~3ft of wire for the connectors in case your Pedal and connectors don't come with them (~AWG24)
- 1x SN-28B crimping tool (same one as used for EPAS cable -[fast shipping](https://www.amazon.com/Wovier-Compression-Ratcheting-0-1-1-0mm2-Wire-electrode/dp/B01CE4FAMW) ,[slow shipping](https://www.aliexpress.com/item/32843027501.html) )
- **EITHER**1x ethernet cable ~2ft (not crossover) for current gen Pedal and [Tesla Giraffe](Tesla_Giraffe.md) (rev B) which have RJ45 ports
- **OR**1x JST2 male and 1x female connector plus some twisted pair wire if RJ45 is not present. You can [buy this](https://www.digikey.com/product-detail/en/adafruit-industries-llc/1131/1528-1494-ND/5761282?WT.srch=1&gclid=EAIa IQob Ch MIj O_5y Jy K4g IV1g OGCh1l OAh1EAQYAi ABEg Lflf D_Bw E) and cut it and you're done (not twisted but will work just fine)

Use the diagram to connect the female WPT-929 pedal connector to the IN side of the pedal board and the male WSP-929 connector to the OUT side of the pedal connector.

### Connecting the Pedal for Old EON with Giraffe or Harness

Connecting the CAN BUS from the Pedal to the [Giraffe](Tesla_Giraffe.md) depends on your setup, as explained in the parts list above.

Via RJ45: Plug in the ethernet cable into the RJ45 port of the Pedal and the other end into the RJ45 port of the Giraffe that is labelled with "comma".Via JST2: Solder positions 3 and 6 of the fake-ethernet port of the Pedal board to the two JST2 connectors (male and female) with enough length to reach EPAS cable/Giraffe. We need both because you will plug the female one in the [Giraffe's](Tesla_Giraffe.md) EPAS connector and then the EPAS Harness into the male JST2. Red should be CAN+ and black should be CAN- (that's the convention also used in the image showing the CAN wire soldered to pins 3 and 6 of the fake ethernet port on the Pedal board).
### Installing the Tesla Pedal for old EON setup with Giraffe or Harness

To install the Pedal, there are two steps:

1. connecting the board to the accelerator pedal
2. connecting the board to the [Tesla Giraffe](Tesla_Giraffe.md) for old EON

This [video](https://www.youtube.com/watch?v=Ui Qved6gt2U) for a similar product shows you what you have to do in order to install the Pedal interceptor between the accelerator pedal and the car's existing connector. Take your time and watch the video first. The process is not complicated if you just follow it step by step.

Once that is complete, connect your ethernet cable to the Pedal and the other end to the Giraffe's RJ45 Port labelled "comma".

Older Giraffes and Pedals without RJ45 ports connect over JST2: Disconnect the EPAS cable from the Tesla Giraffe and connect the female JST2 from your Pedal to the Giraffe. Then connect the EPAS cable to the male JST2 from your Pedal.

If your Pedal needs to be flashed, don't put your trim back on just yet. Instead connect the Giraffe and Panda to the car and and follow instructions below. This makes it easier to get to the Pedal in case necessary.
Once you're ready to cover everything up, make sure you don't forget to reconnect the footwell LED and that all your cables are positioned well, so that they don't rub against sharp edges and that there's no tension on them.

### Flashing the firmware for Tesla Pedal for older EON versions

```
You have to use a Tesla specific firmware on the Pedal in order to work for Tesla.
```

You can flash the Pedal directly from the EON, this is why**we highly recommend installing the Pedal in your car before flashing (see section above)**. If, for whatever reason, you need to flash your Pedal outside the car, use below instructions in conjunction with [this guide](https://medium.com/@jfrux/flashing-the-comma-pedal-with-ubuntu-a83fb668f6e2) by [@jfrux](https://medium.com/@jfrux) 

##### Step 1: Get the code

SSH into your EON, then download our latest Pedal code (use`git pull`in /data/panda if you already cloned the repo).

```
git clone --depth 1 https://github.com/Bog Gyver/panda.git -b tesla_pedal /data/panda
```

##### Step 2: Prepare your hardware

Connect your EON to your car (Panda) if not already done. Then press the brake pedal to power up the Pedal.

Now kill all OP processes on the EON to free the CAN bus and change to the directory where all flashing related files are located.

```
tmux kill-session -t comma
cd /data/panda/board/pedal
```

##### Step 3.1: Flashing via CAN

Flashing via CAN1is the recommended (easy) way but**only possible with Pedals ordered after 7th Sept. 2019**. Older Pedals and those built yourself need to follow Step 3.2 instead. They will then also gain the ability to be flashed via CAN for future updates.

Run and wait for this command to finish:

```
make canflash
```

In case flashing is stuck at`checking for flasher`, press CTRL+C to abort and re run above command. Power cycling Panda by reseating it may also help. If CAN flashing doesn't work for whatever reason you can always try Step 3.2 as a fallback.

1Original resource:[Comma Pedal: Updating the Firmware over CAN](https://medium.com/@jfrux/comma-pedal-updating-the-firmware-over-can-fa438a3cf910) by [@jfrux](https://medium.com/@jfrux) 

##### Step 3.2: Flashing via USB

**Flashing via USB involves more steps and is only necessary if flashing via CAN is not possible yet (see explanation in Step 3.1).**

If you built your Pedal yourself or it was shipped without any firmware, it will boot in DFU mode. To know which mode you're in look at the LED on the Pedal board: no light = DFU mode, slow blink = normal flash mode, fast blink = normal operations.

If your Pedal LED is blinking, you can put your Pedal into DFU mode via CAN:

```
./enter_canloader.py --recover
```

It's possible that the LED won't turn off on the first try, but usually does so after entering the command a second time*. In case you get an Assertion Error, reboot EON and start over from step 2. Also power cycle your Panda by reseating it if the issue persists.While in DFU mode, connect your EON via USB to the Pedal (unplug from Panda or use a second USB cable) ensuring that the car does not go in Car Off mode (don't lift your butt off the driver's seat) since Pedal would lose power and therefore also DFU mode.
Now run this command to flash the bootloader and operational code:

```
make recover
```

Sometimes you have to issue the command multiple times until it completes successfully. With the updated bootloader you'll be able to flash future updates via CAN.

Once done, unplug USB from the Pedal and back into the Panda.

*If you can't or don't want to put the Pedal into DFU mode via CAN, you can also do so by [applying 5 Volt to a special point on the board](https://medium.com/@jfrux/flashing-the-comma-pedal-with-ubuntu-a83fb668f6e2#fcdf) while connecting it to USB (to power it up). Car must obviously be off or disconnected for this. That usually requires 2 people: one to keep the jumper for 5V in place and the other to connect the USB.

##### Step 4: Cleanup

If all went good you can reboot EON to restore the OP processes that were closed in step 2.
Once the pedal is back in operational mode (rapid LED blinking), PRND letters should be white. If it's not, first try to reboot pedal: Open the driver door while not sitting in the driver seat to make the car go in "Car Off" mode, then step on the brake to turn it back on.
If you still experience red PRND letters after a successful flash and pedal being in operational mode, it means a bad connection between the car and the accelerator, so check your pedal Molex connectors.

### Using the Tesla Pedal

```
Without electric brakes (i Booster) the car only uses regenerative braking. This is not enough for suddent slowdowns. YOU MUST BE READY TO MANUALLY BRAKE AT ANY MOMENT.
```

Out of the box, OP will use the Tesla CC (with stalk spamming) to control CC. This in our OP implementation is called Adaptive Cruise Control or ACC. CC on Tesla only works above 18 MPH (29 km/h).

If you turn off the Tesla CC by pressing on the CC stalk, OP will switch to Tesla Pedal mode (PCC). This will provide you with smooth adaptive cruise control by sending the right commands to your Tesla Pedal. Tesla Pedal works down to 1 MPH, but be careful, regen brakes stop working at 5 MPH (8 km/h).