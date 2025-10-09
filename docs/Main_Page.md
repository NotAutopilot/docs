# Welcome to Tinkla!

If you're looking for instructions for the old versions of OpenPilot that run on EON with white or gray panda, that page is availablehere.

Talk: Feedback? Ideas? Comments?

## What is OpenPilot

OpenPilot is open source software built to improve upon the existing driver assistance in most new cars on the road today. Now OpenPilot is available for pre-autopilot Tesla Model S as well as Tesla Model S/X with autopilot hardware 1 or 2.

Currently, openpilot performs the functions of Adaptive Cruise Control (ACC), Automated Lane Centering (ALC), Forward Collision Warning (FCW) and Lane Departure Warning (LDW) for a growing variety of supported car makes, models and model years. In addition, while openpilot is engaged, a camera based Driver Monitoring (DM) feature alerts distracted and asleep drivers. See more about the vehicle integration and limitations.

## Getting Started

1. OpenPilot for preAP Tesla ModelS
2. OpenPilot for Tesla Model S/X with AP1
3. OpenPilot for Tesla Model S/X with AP2

## Software Design History

### v0.9.6-61 (2024-01-17)

```
* in line with latest code from Comma
* adds support for C3X
* adds fixes for "steering temporary unavailable"
* you can now chose between OP/AP1/ACC on cars with AP:
 - OP - single stalk pull
 - AP - double stalk pull
 - ACC (Tesla stock) - up/down stalk movement
* improved IC integration for cars with AP:
 - when OP/AP now engaged, IC shows AP data
 - when OP is engaed, IC shows OP data
 - when AP is engaged, IC shows AP data
* option to ignore radar errors (useful in winter time when radar might get dirty)
```

### v0.8.13-57 (2022-11-17)

```
* Fix pedal pressed message on ACC
* Adjust top speed with speed limit for AP1
* Show set speed in lower right corner for RHD cars
* Brake factor speed adjustable (1.1 below 70km/h, 1.4 above 110km/h)
```

### v0.8.13-56 (2022-11-08)

```
* Sound files volume fix
* Show TACC icon on IC for AP cars when OP is available
* Display shutdown
* Engage at 0 MPH (AP cars)
* Fleet based speed (AP cars)
* Slow down in turns based on SunnyPilot 
* prevent iBooster from pressing both pedals
* Improved acceleration handling for AP1
* Add message ID for the CAN Error 
* Reduce min accel to -4.5 
* Improve follow distance
* Better and smoother pedal with 4 profiles
* Universal calibration tool for pedal interceptor
* iBooster control improvement
* Add 5 pedal profiles and 3 acceleration profiles for better long control wiht pedal
* Add alert when maximum regen is used with pedal to show braking limit 
* Prevent PCC engagement with uncalibrated pedals
* Cancel automatic lane change on blinker or wheel touch
* Toggle to ignore wrong date/time on device
* Increase steering angle limits on Panda
* Fix Controls Mismatch when taking over steering
```

### v0.8.13-55 (2022-09-21)

```
* Sound toggles (to mute certain sounds)
* Sound files
```

### v0.8.13-54 (2022-09-19)

```
* Add capabilities for Str params
* Implement fixed fingerprint option to avoid fingerprinting issues
```

### v0.8.13-53 (2022-08-05)

```
* iBooster ECU fixes
* Try to fix Controls Mismatch issues
* Add toggle for radar error with AP
```

### v0.8.13-52 (2022-08-05)

```
* Reset Pedal PID on engagement
* Toggle for Model S Performance for pedal (bug fix)
* Pedal profile for MS Performance (bug fix)
* Toggle to prevent auto updates
* Toggle for dev unit (bug fix)
* Autoresume speed from stand still
```

### v0.8.13-51 (2022-07-05)

```
* new PID for pedal, including way to save state
* toggle for Model S Performance for pedal
* pedal profile for MS Performance
```

### v0.8.13-48 (2022-05-18)

```
* limit iBooster travel to a max of 15mm (90psi on my car)
* set Hold values for iBooster to 6.5mm (14psi)
* change lane poly calculation logic for IC integrtion
```

### v0.8.13-47 (2022-05-11)

- do not send iBooster brake command when real accelerator pedal is pressed

### v0.8.13-46 (2022-05-10)

- do not send iBooster brake command when accelerator pedal is pressed
- increase brake hold value

### v0.8.13-45 (2022-05-09)

- update firmware for Vacuum Sensor board with brake release condition
- allow 0x553 for iBooster in panda
- allow 0x555 for IVS in panda

### v0.8.13-44 (2022-05-04)

- update firmware for Vacuum Sensor board
- fix CRC for iBooster

### v0.8.13-43 (2022-04-21)

- fix Pedal over CC issues when MCU2 or no Tinkla Buddy
- add firmware for Vacuum Sensor board
- fix CRC for iBooster

### v0.8.13-41 (2022-04-19)

- fix startup screen for C3
- fix modem initialization for C3 (comma three: correctly set initial EPS bearer settings for AT&T sim cards)
- fix logic for enabling OP on preAP MS
- add C3 Tinkla Splash

### v0.8.13-38 (2022-04-05)

- toggle to allow move of maps on left
- always show OP data on IC when engaged (AP1/AP2)
- Comma three support
- fix top speed indicator when using pedal with Tinkla Buddy

### v0.8.13-37 (2022-04-01)

- added configuration value for HandsOnLevel before human takeover
- fixed acceleration for AP1 stop-and-go which was limited at 1.2m/s^2
- added testing toggle for full LongControl from planner vs actuator (AP1 or preAP with iBooster)
- fixed release scripts
- fixed automatic flashing of panda code

### v0.8.13-34 (2022-03-27)

- full support for OP long control with AP1
- follow distance is adjustable from CC stalk (when available)
- UI shows multiple road lanes when detected by OP
- fix bug where ACC would show disabled message after brake press even when not enabled
- variable acceleration based on speed for AP1 OP based long control
- improve pedal tune (by vandreykiv)
- fix variables default value not showing correctly in UI

### v0.8.13-33 (2022-03-26)

- new events to show when Standard CC is enabled
- added shutdown timeout for device (vandreykiv)

### v0.8.13-32 (2022-03-20)

- allows Standard CC (no LKAS) to be used with pedal when cruise enabled
- allows Standard CC (no LKAS) to be used with ACC by double press down
- allows for pedal to be used over CC (when setting enabled)

### v0.8.13-31 (2022-03-18)

- based on v0.8.13 (latest release from Comma)
- requires EON Gold/Black Panda or Comma two/three
- no need for EPAS harness
- Panda flash built in UI
- Pedal flash built in UI
- EPAS patching built in UI
- Radar VIN Learner built in UI
- radar behind nosecone setting as part of VIN Learn (set via UI)
- works with either human long control, ACC or pedal
- no more ssh to install or update
- no more ssh to change any settings, all done through UI
- automatic change top speed based on speed limit and offset (either units or %)
- automatic lane change with adjustable delay
- human steering override with adjustable delay for re-engagement
- steering never disengages unless you cancel it via stalk
- adjustable follow distance though UI
- allows for CC without LKAS when using Pedal
- pedal can be on either CAN0 or CAN2 (set via UI)
- support for iBooster ECU (in dev)