# Tesla Unity Configuration

## Intro

- On top of the standard settings offered by OpenPilot, Tinkla Unity has three separate sections which configure how the software behaves in your car.
- Understanding these settings and what they do is a crucial component on having the best experience with Tinkla Unity in your vehicle.
- Because our cars are so similar yet so different (just between 2012 and 2014 the number of available factory configurations for Model S is ridiculously high), combined with changes made by Tesla between software updates, it is hard to automate the configuration. So please take your time to read through these settings and understand them.
- If you have questions, please join us on[Discord](https://discordapp.com/invite/Wyna3qy) where people will be happy to answer your questions.
- Do not turn on settings for features you do not have installed at the moment (like using the Tesla Radar or using the Pedal Interceptor) as they will prevent the software from running (they expect to receive data from those devices once enabled).
- For theeditable settings, do not change them from the default values to one of the extremes (max or min) without understanding how they work.

## Editing numerical values

- Some of our settings are just toggles (ON green, OFF grey), but some are editable as numbers.
- It is important to understand how these numerical settings work.
- Look at the screen shots below. The screen shows the title of the setting, some tips/description for what you are doing and (if applicable) the unit of measure. Then the third row has the minimum value, maximum value and step.
- Values are always limited between min and max and based on the step. If you enter a value lower than the min, the min value will be used. If you enter a value larger than the max, the max value will be used. If you enter a value between min and max, it will be approximated to the closest step increment from the value you entered.
- It is very important to check the value once you save it. It will be displayed in the settings screen, next to the "Change" button.
- There is no need to enter the units of measure. Any text other than numbers is ignored and the units of measure are added automatically.
- There is one field (**Speed Limit Offset**) which can be either in your car's units of measure (km/h or MPH) OR can represent a percentage of the speed limit. The way this field is interpreted depends on the value of the**Use relative offset**toggle.

- Editing numerical values in Tesla Unity settings page (1/2)
- Editing numerical values in Tesla Unity settings page (2/2)

## Tinkla

```
These settings apply to all models of Tesla. They control software that was created only for the Tesla branch.
```

- **Enable HSO**(toggle): Enables Human Steering Override (HSO) feature, which allows the driver to take over the steering wheel without disengaging the OpenPilot software. Once the hand is removed from the steering wheel, the software takes over again to keep the vehicle in the lane.
- **HSO numb period**(editable field): This is the interval, in seconds, at which OpenPilot checks if the driver is still overriding the steering. Default values is 1.5 seconds. A value to small and you might have to fight OpenPilot over control. A value too large will delay OpenPilot from taking control in time after you let go of the steering wheel.
- **Enable HAO**(toggle): Enables the Human Acceleration Override (HAO) feature, which allows the driver to accelerate the car while OpenPilot has longitudinal control of the vehicle without disengaging the software.
- **Enable ALC**(toggle): Enables Automatic Lane Change (ALC) feature, which automatically changes lanes x seconds (see ALC delay) after the turn signal stalk was tapped (not fully pressed). During the whole process of ALC, the turn signals will be kept on and the software will check if the line between lanes allows for a lane change and (on AP1/AP2 cars) if there is any vehicle in the blind spot.**For preAP cars, which do not have blind spot monitoring, please confirm there is no vehicle. If there is, fully press the turn signal to cancel the ALC process**
- **ALC delay**(editable field): The dalay, in seconds, from the turn signal stalk press until the OpenPilot initiates the lane change. During this time the blinker will remain on, allowing the other drivers to see your intentions. You can reduce the wait time by slightly touching the steering wheel in the direction of lane change, which will initiate it at that moment.
- **Enable OP Long Control**(toggle): Allows OpenPilot to control the acceleration and braking of your vehicle. If this toggle is Off, you will have to accelerate/brake on your own for[preAP Tesla Model S](OpenPilot_for_preAP_Tesla_ModelS.md) (OpenPilot will just do lane keep assist) or it will use the built in adaptive cruise control (ACC) feature of your Tesla Model S/X with[AP1](OpenPilot_for_Tesla_Model_S-X_with_AP1.md) /[AP2](OpenPilot_for_Tesla_Model_S-X_with_AP2.md) .
- **Turn screen off while engaged**(toggle): Turns off the Comma devkit screen when there are no messages/warnings to be shown. It turns on automatically if there is something to be displayed.
- **Show Debug View**(toggle): For development purpose only. Please leave this toggle OFF.
- **Hide GPS Warnings**(toggle): Because of the window treatments on our Tesla vehicles, the GPS signal inside the vehicle is very low. This will create constant warning on the Comma devkit display about the quality of GPS signal. By turning this toggle on you will mute those messages.
- **Maps on left side**(toggle): hows the maps on the left side of the screen (Comma3 only).
- **Flip screen (for RHD)**(toggle): Flips the screen for people driving on the wrong side of the road. Changes to C2 hardware are needed (C2 only)*(under development)*.
- **Shutdown after # of hours**(editable field): Allows the Comma devkit to automatically shutdown (reducing the power consumption on your vehicle) after x hours of car being off. When returning to your vehicle, the Comma devkit will turn back on after detecting your car is on.
- **Hands on level**(editable field): Level at which to detect hands on wheel. Higher number means more force needed.
- **Tinkla Development Unit**(toggle): For development purpose only. Please leave this toggle OFF.
- **Flash Panda**(button): Panda is a separate internal component inside your Comma devkit. It has its own software and does a lot of the safety controls and checks between your car and the Comma devkit. You can think of it as the CAN Police. Every time you update your Comma devkit software you will also have to flash the new code on the Panda. This button starts the process to[flash your Panda](Comma_devkit.md) .

- Tinkla specific settings for the Tesla Unity branch of OpenPilot (1/2)
- Tinkla specific settings for the Tesla Unity branch of OpenPilot (2/2)

## Tesla preAP

```
These settings apply only to preAP Tesla Model S. They control how OP software works on a Tesla that never had AutoPilot hardware.
```

- **Tesla software post 2019.16**(toggle): Most users should have this toggle ON. If by any chance (I do hope not) you're running Tesla software older than version 2019.16, do turn this OFF to see if it works on your car. There were CAN messages changed between pre and post version 2019.16.
- **Use pedal**(toggle): If you have a[pedal interceptor](Pedal_Interceptor.md) installed in your car, please turn this toggle ON. Otherwise, leave it OFF. This can create issues if turned ON without a pedal interceptor installed.
- **Use pedal over CC**(toggle): If you have a[pedal interceptor](Pedal_Interceptor.md) installed in your car AND want to have pedal based adaptive cruise control (PCC) enabled all the time no matter what the status of your car's cruise control is, turn this ON. It will completely disable your car's cruise control. If you have pedal interceptor and leave this OFF, then when the car's cruise control is ON you can not engage OpenPilot but it will allow you to use the factory Cruise Control.
- **Pedal on CAN0**(toggle): If you have a[pedal interceptor](Pedal_Interceptor.md) installed in your car and it is connected on CAN0, then turn this toggle ON. An example when you would need this on would be connecting the pedal to the Comma Relay RJ45. If your pedal is connected to the[Tinkla OBD-C Adapter](Tinkla_OBD-C_Adapter.md) , then leave this toggle OFF as your pedal will be on CAN2.
- **Pedal Profile**(editable field): The profile to be used with the Tinkla Pedal Interceptor. 1-wider range to 4-narrower range, 5-no limits (default). If 5 seems to aggressive, try 2,3 or 4.
- **AutoResume ACC**(toggle): Not used at the moment
- **Follow Distance**(editable field): This field adjusts the follow distance, in seconds, from the lead car. A smaller value will keep you closer to the lead car while a larger value will keep you farther out from the lead car. It is speed dependent. For example, at 60 MPH your vehicle travels at a speed of 27 m/s (meters per second). A value of 0.8s for the follow distance will keep your vehicle 27 * 0.8 = 21.6m (72ft) back, while a value of 1.2s will keep your vehicle 27 * 1.2 = 32.4m (108ft) back. At 30 MPH the distance will be 10.8m (36ft) for 0.8s and 16.2m (54ft) for 1.2s.
- **Use Tinkla Buddy**(toggle): Tells the Tesla Unity code to send the messages for IC integration if you have aTinkla Buddyinstalled in your preAP Tesla Model S with MCU1 car. (does not work for MCU2 cars).
- **Use Tesla Radar**(toggle): Tells the Tesla Unity code that you have installed a[Tesla Bosch Radar](Tesla_Bosch_Radar.md) in your car. Do not turn this ON unless you have properly installed and configured a radar in your car or the software will not work.
- **Radar behind nosecone**(toggle): If you installed the[Tesla Bosch Radar](Tesla_Bosch_Radar.md) behind the nosecone, turn this feature ON before doing the Radar VIN Learn process so that the radar learns about its position.
- **Radar offset**(editable field): If you installed a[Tesla Bosch Radar](Tesla_Bosch_Radar.md) in your car and have the radar off-center (like when it is behind the nose cone), adjust this value to show the**horizontal**distance, in meters, between the center of the nosecone (the middle of the Tesla logo) and the center of the radar. Positive numbers towards left of the car (as seen from the driver seat).
- **Use Radar Upside Down**(toggle): Allows one to install the Tesla Radar upside down.
- **Car has iBooster**(toggle): Turn this toggle on if you have retrofitted your car with the[SGH Innovations' iBooster ECU](https://sghinnovations.com/?product=ibooster-controller-ecu) to take advantage of full stop-and-go capabilities.
- **Ignore wrong Date/Time**(toggle): Allows a rebooted EON to run even if the date is incorrect. Prevents need to connect to network upon restarting.
- **Force PreAP Tesla Model S**(toggle): This toggle has to be always ON if you have a preAP Tesla Model S. It has to be OFF for any other Tesla vehicle. It forces the Tesla Unity code to think it is connected to a preAP Tesla Model S and to adjust all the settings accordingly. Turing this feature ON on an AP1/AP2 Tesla will make the software stop working.
- **Flash EPAS**(button): This feature[patches the code](Comma_devkit.md) in the electronic power assisted steering (EPAS) ECU of your car, allowing us to control the steering. It is a necessary step when installing the software for the first time and might be needed again if the software stops steering your car after a Tesla software update.
- **Flash Pedal**(button): Use this feature if you just installed a[pedal interceptor](Pedal_Interceptor.md) in your car to ensure the Tesla specific software is loaded on the pedal interceptor. Please make sure you set your toggles properly for the pedal interceptor (see above) BEFORE attempting to flash the code onto the device.
- **Calibrate Pedal**(button): Use this feature to calibrate your pedal interceptor device in order to enable the right experience when using PCC. Pedal will not work (will not allow you to enable PCC) until it is calibrated.
- **Radar VIN Learn**(button):Use this feature to configure your radar if you have installed a[Tesla Bosch Radar](Tesla_Bosch_Radar.md) in your car. It will program the VIN of your car as well as the location of the radar. Please make sure you configure all the toggles and settings for the radar (see radar options on this page) before attempting the Radar VIN Learn.

- Tesla preAP specific settings for the Tesla Unity branch of OpenPilot (1/3)
- Tesla preAP specific settings for the Tesla Unity branch of OpenPilot (2/3)
- Tesla preAP specific settings for the Tesla Unity branch of OpenPilot (3/3)

## Tesla Generic

```
These settings apply to all models of Tesla. They control how OP software works on a Tesla.
```

- **Adjust ACC max with speed limit**(toggle): Enables OpenPilot to adjust the top speed allowed for adaptive cruise control (ACC) based on the speed limit information provided by our Tesla maps system OR detected by AP1/AP2. Once enabled, your top speed will adjust based on the speed limit for that road**plus**the offset (either relative or fixed) that you set in the next two settings.
- **Use relative offset**(toggle): When enabled, OpenPilot uses the**Speed limit offset**values as a percentage of the speed limit. For example if you set the**Speed limit offset**and the detected speed limit in your area is 60, the max will be set to 60 + 60x15% = 69. If the speed limit was 35, the max will be 35 + 35x15% = 40. If this toggle is OFF, then the calculations will use the**speed limit offset**as a fixed delta. If the speed limit is 60, and your offset is set to 15, the max will be set to 60 + 15 = 75. If the speed limit is 35, and your offset is set to 15, the max will be 35 + 15 = 50.
- **Speed limit offset**(editable field): This is the offset (in either units of measure for your speed limit - km/h or MPH - or in % for relative offset) for the max speed limit when adjusted based on detected speed limits for the roads you are driving on.
- **Slowdown in Turns**(toggle): Reduces the car' speed in turns based on road curvature and current speed.
- **Slowdown Factor in Turns**(editable field): The multiplier used to compute the safe speed to take a turn. 0.5 is slower, 1.5 is faster. If you think the car takes turns too fast, use a lower factor. If you want the car to take faster turns, increase the factor.
- **Braking Factor**(editable field): The multiplier used to compute the Tesla braking power. 0.5 means less braking and 1.5 means more braking.
- **Acceleration Profile**(editable field): The profile to be used for acceleration: 1-Chill, 2-Standard, 3-MadMax
- **Use LongControl data**(toggle): Uses data from Tesla fleet to control speed based on maps. Only works on cars factory equipped with AutoPilot.
- **Ignore Radar Errors**(toggle): Ignore Tesla Radar errors about calibration not being done.
- **Force Tesla AP Fingerprint**(editable field): Forces fingerprint for a specific model of Tesla with AutoPilot. This should not be used for preAP Tesla Model S.Possible values are*TESLA AP1 MODEL S*,*TESLA AP1 MODEL X*,*TESLA AP2 MODEL S*.
- **Disable Main Sounds**(toggle): Disables the device from playing the Engagement and Disengagement sounds. To be used when the car will generate these sounds by itself. Prompt and Warning sounds will still be played.
- **Disable Prompt Sounds**(toggle): Disables the device from playing the Prompt sounds. To be used when the car will generate these sounds by itself. Engagement/Disengagement and Warning sounds will still be played.

- Tesla specific settings for the Tesla Unity branch of OpenPilot (1/1)