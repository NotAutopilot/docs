# Comma devkit

The Comma devkit (two or three) is the name associated in the Comma.ai community to the device that sits in your windshield and does all the calculations for LKA and ACC.

## Comma DevKit

The EON Gold (and Comma two) is based on the[Qualcom Snapdragon 821 mobile platform](https://www.qualcomm.com/products/snapdragon-821-mobile-platform?cmpid=snfyus19642&gclid=EAIaIQobChMI-oG8if364QIVFY_ICh0DFArXEAAYASAAEgKFL_D_BwE&gclsrc=aw.ds). Phones like LeEco LePro3 have been used to create the FrEON (the free EON). You can find some instructions[here](https://medium.com/@kirk_40929/getting-comma-openpilot-running-on-a-used-phone-c72d609cb4d3). You would also need a Black Panda in order to have a kit similar to the Comma two or Comma three.

If you choose to buy your[Comma two](https://comma.ai/shop/products/two)or[Comma three](https://comma.ai/shop/products/three)already made, you can do so from Comma.ai store for $999 USD and up, depending on version. Support for Comma two is supposed to end in summer of 2022.

Also, keeping the phone screen off helps keeping the temperature low. I know, in the beginning one wants to see those lines matching the lines in the video, but after a while you stop paying attention to the screen. And if you have the IC integration all the data is on IC anyway. So turn that screen off and you will see the temperature drop about 15F.

## Installing the Comma devkit

Comma devkit installation is pretty simple. Your main objective is to ensure the Comma devkit is level with the ground, and pointed as straight as you can get it. Also do make sure the camera on the left side of the devkit (which is used for driver monitoring) can see you well. If you're uncomfortable "eyeballing it," you may want to use:

- A measuring tape
- A roll of masking tape
- A friend to help

### Tips

1. Before adhering any components, it is recommended that you clean the area with isopropyl alcohol to remove any oils or other contaminants from the surface. This is particularly important for the main comma mount. Contaminants may cause the adhesive hold to weaken, resulting in your device falling off your windshield.
2. When affixing the main comma mount to the windshield, try to prevent air from being trapped under the adhesive. This can be done by adhering one edge of the mount to the windshield first and "rolling" the rest of the mount onto the windshield.
3. Many people recommend leaving mount adhered to your windshield for 24-48 hours before attaching the device. It is also recommended that you keep the mount out of the sun for this "curing" time period. Attaching tape to the exterior of your windshield helps to provide shade while the adhesive sets if you can't keep it in the dark.
4. Avoid installing the mount on very cold days. The adhesive may not form a strong bond under cold temperatures. Additionally, the condensation from your breath on the windshield could prevent a strong bond from forming. If necessary, install with with window defrost on to warm up the window and prevent condensation.
5. Be sure to attach all cables firmly. This is one of the main installation errors. The automotive cables should all click when fully seated. The RJ45 (flat Ethernet cable) should also nicely click into both connections.
6. The USB-C connection should be pushed in with some force. Users with errors have frequently discovered that the USB-C connection on the back of the Comma devkit is a tight fit make sure the connector is fully inserted.

### Instructions

1. Find a place at the bottom of the windshield, along the driver's side pillar that has a similar position on the passenger side (such as the place where the corner of the front hood meets the fender).
2. With the tape starting from that point, mark 3 places along the side of the windshield. Use the edge of the masking tape to mark them. I personally used 3" from the bottom, the top of the windshield and then about 1/3 from the bottom, 2/3 from the top. It does not matter what the measuring tape says, as long as it says the SAME distance on driver's and passenger's sides.
3. Repeat the process on the other side of the windshield, ensuring you mark the same spots.
4. measure the distance between one edge of the windshield and the other end, keeping the tape at each pair of marked points from before. use masking tape to mark the middle of the windshield. again, use the EDGE of the tape, not the center.
5. Now use a long piece of masking tape to mark the center of the windshield from top to bottom. This (if you did everything correctly) will cover all 3 of your markers from before and provide a straight line. One edge of the masking tape is now the perfect middle of the windshield. Your mount will have to be aligned with that for a perfect position.
6. Take a small piece of tape and mark the middle of the Comma mount. use a slightly longer piece than the mount (maybe 1/4-1/2" more on each side) and ensure it is straight and down the middle of the Comma mount. If, when looking from inside of the car, your tape is to the RIGHT of the center, then put the tape on the LEFT side of the mount. Reverse if the other way.
7. Using your Comma devkit without the mounting bracket, determine the location along the center of the windshield where you want it placed. Make sure the grove on the support is alongside the center of the windshield. use a small piece of masking tape to mark the upper part of the position where you want your Comma devkit to be.
8. Remove the RED protective tape from the back of the 3M adhesive and be ready to place the Comma mount on the windshield. Align the masking tape we placed on the Comma mount on the inside with the masking tape we have on the outside of the windshield. They should not overlap at all AND you should not see light either. when you are confident on the position press hard on the mount.
9. Remove all masking tape. You are done. You now have a perfectly centered, perfectly vertical Comma devkit.

### preAP Model S only: Hide the Thuderbolt3 cable above the Headliner

1. Pull your Thunderbolt3 cable from the footwell gap (where the OBDII port with a Tinkla OBD-C Adapter is) up to where the "A" pillar is...
2. Follow the instructions to remove the air bag cover from the "A" pillar
3. Pull the cable up the height of the "A" pillar across to the mirror holding it close to the headliner. Adjust the length to reach where you will place your Comma devkit.
4. Drape the Thuderbolt3 end over the rear view mirror.
5. Move to the corner where the headliner and the removed airbag panel intersect, this corner is the easiest place to stick a pry tool... Using your pry tool lift the corner and move the pry-tool along the top of the windshield tucking the wire into the headliner as you go. When you reach the mirror base, the Thuderbolt3 cable can be routed down the front of the windshield to emerge at the bottom of the mirror base closer to the center of the windshield.
6. Once the cabling is tucked in the headliner, move back to the "A" pillar and tuck the cable into the pillar cover routing it down towards the door seal, then secure the pillar cover to conceal the wiring.

## Installing OpenPilot for Tesla

```
Comma.ai doesn't fully support Tesla cars. That's why we maintain our own fork, which you will have to install into your Comma devkit.
```

```
DON’T INSTALL ON ANYTHING OTHER THAN A SUPPORTED TESLA! (Someone bricked their Jeep trying.)
```

### If you had OpenPilot for Tesla v0.6.6 (tesla_devel) or v0.7.4 (tesla_alpha) installed

If you had OpenPilot for Tesla v0.6.6 (tesla_devel) or v0.7.4 (tesla_alpha) installed on your Comma two/EON Gold before, you HAVE to first update your device's firmware to the latest version before being able to use Tesla Unity.

In order to do so,[you have to ssh into your device](SSH_Into_Your_Device.md)and run following command

`bash <(curl -s https://tinkla.us/files/nu/update.sh)`

```
DON’T RUN THIS COMMAND ON AN OLD EON BASED ON One+ 3T AS IT WILL BRICK IT. THE OLD EON ONLY WORKS WITH THE OLD VERSION OF OPENPILOT FOR TESLA.
```

### Installing the Tinkla version of OpenPilot

Follow these instructions for setting up a Comma devkit with Tinkla OpenPilot

```
If the devkit came with the official software preinstalled (did not start with "Getting Started"), or to remove the "Dashcam" software, follow the instructions in section Removing Dashcam Software
```

1. When your device boots up for the first time, you'll have the choice of either installing "Dashcam software" or "Custom Software (Advanced)." Let's go through this process to install OpenPilot instead of the Dashcam software (which does not pilot the car).
2. Ensure you're connected either to a Wifi hotspot, or that you can "Skip" the wifi hotspot selection (that means the SIM card is connected to a network).
3. Select "Custom Software (Advanced)."
4. Enter[https://op.tinkla.us](https://op.tinkla.us)and click "Install Software."
5. Your device will then download the software, show "Installing Tinkla Unity" on the screen, and install it. Note that when using the SIM card for this, you may need to retry once or twice depending on the quality of the connection. When using a wall charger at your desk, make sure it can output 2-3A (installation draws just a little above 1.0A)
6. Closely follow the training guide.
7. [Edit your Config](Comma_devkit.md)for your specific Tesla
8. Train (calibrate) the system on your car by manually driving faster than 15 mph (~ 25 km/h) for a few minutes. The screen will show what the camera sees after the training is complete.
9. You may now enable Tinkla Unity as per usual, and OpenPilot will take control after emitting a sound.

### Removing Dashcam Software

```
If you selected the "Dashcam" software during setup you can uninstall with the following steps
```

1. Click on the settings icon (the gear in the top left of the homescreen)
2. Click "Software" on the right (Version will say "xxxx vX.X.X, something different than Tinkla OP vX.X.X))
3. Scroll down to "Uninstall xxx"
4. If the option is grayed out or unavailable, shut off your car.
5. When prompted with a confirmation of uninstalling click, "Uninstall"
6. The device will reboot and uninstall the existing software.
7. Once finished it will return to the device's initial state. You can now install Tinkla Unity software through the setup.

### How can I reset my Comma devkit to factory settings?

If something went wrong during the install process, do not despair. You can always reset the Comma devkit to factory settings by following these simple steps:

1. Press and holding Power and Volume Up until your devkit enters the Bootloader mode
2. Go to Factory Reset -> Full Factory Reset
3. Confirm with Yes then use the power button to reboot the devkit. You should now be able to reinstall the software.

## Configuration and Firmware Patches

### Edit your Config

After the Comma devkit has booted you should go and[edit the configuration settings](Tesla_Unity_Configuration.md)specific to our Tinkla Unity branch for Tesla.

### Flash your Panda

```
Since version 0.8.13-37, flashing of the panda code is done automatically every time there is a change in the code. If for any reason your devkit shows car offline while connected to your Tesla, and a reboot will not fix that, please follow the instructions below to flash both the bootloader and the code onto your panda.
```

In your Tesla while it says “Car Off” connect your Comma devkit to your car harness (either using the Tinkla OBD-C Adapter for preAP cars or the specific harness for your AP Tesla.

Once the device fully boots up, go to Settings->Tinkla and scroll down to the bottom of the screen where you will see a button called "Flash Panda"

Once you hit the Flash Panda button, a new (white) screen will open up and at the bottom will will find the Flash button. Select Flash and then wait for the software to flash the Panda. Once complete you will be prompted to reboot the Comma devkit

### What do the Panda LED colors mean? (on the back of the devkit)

- White: CAN send enabled
- Red: This is your panda's heartbeat(power). It fades in and out
- Green: Bad firmware or firmware flashing (only green, fast)
- Blue (static): CAN detected
- Blue (fades in and out): power saving

### preAP only: Patch your EPAS

In your Tesla while it says “Car Off” connect your Comma devkit to your car harness (etiher using the Tinkla OBD-C Adapter for preAP cars or the specific harness for your AP Tesla.

Once the device fully boots up, go to Settings->Tesla preAP and scroll down to the bottom of the screen where you will see a button called "Flash EPAS"

Once you hit the Flash EPAS button, a new (white) screen will open up and at the bottom will will find the Patch button. Press and hold the brake pedal so the car stays on. Note that during the process you might see some warning on the instrument cluster which will go away. Select Patch and then wait for the software to configure the EPAS. Once complete you will be prompted to reboot the Comma devkit. Also, at this point exit the car so that the car goes in Car Off mode. Once this happens your EPAS will be patched and ready to go.

## Almost there

### Final steps

Finally, check here to learn more about all the controls, functions and features related to longitudinal control:[Using adaptive cruise control](Longitudinal_Control__ACC.md)

### First OpenPilot Drive

1. Make sure the Comma devkit is mounted properly and connected to the Panda by following[#Installing the Comma devkit](Comma_devkit.md)
2. Turn your car on and verify that the left side indicator shows "Car Online". If not, your panda is not flashed, see flashing instructions here[Panda Flashing](Panda.md).
3. OpenPilot should switch to "drive mode" and show the camera view with white lane marking
4. Read up and understand the controls from[Using adaptive cruise control](Longitudinal_Control__ACC.md)

### If your car is recognized

1. Calibration will increment at above 15mph. It will take less than 30 seconds to fully calibrate. If you move the mount, it's recommended to reset camera calibration under "device settings".
2. When driving, Pull the Cruise Control Stalk to use OpenPilot

### If your car is not recognized

1. If your Tesla is a preAP Model S, did you turn on the toggle for**Force PreAP Tesla Model S**in the**Tesla preAP**[settings](Comma_devkit.md)?
2. Ask for help on the #tesla channel of the[Comma.ai Discord](https://discordapp.com/invite/Wyna3qy)

### Experiencing issues?

In case you use a[Pedal](Pedal_Interceptor.md)and it just won't work, chances are it doesn't have Tesla firmware on it yet. You can flash it with[this guide](Pedal_Interceptor.md).
On any other issue, please use the search function or ask us on[Discord](https://discordapp.com/invite/Wyna3qy).