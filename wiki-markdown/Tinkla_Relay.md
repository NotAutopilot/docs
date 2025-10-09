# Tinkla Relay

Do you like Tinkering with your Tesla? Do you like adding additional features to it without having to install old style switches to control them? Do you want to control additional lights or devices based on specific conditions of the car (charging, driving, turning left/right, gear forward/reverse, high beams on, blind spot monitoring signals, or specific button presses on the steering wheel)? Then Tinkla Relay is a must have Swiss Army Knife for Tesla Model S/X/3/Y integrations.

1. Are you annoyed when AutoPilot disengages because you just slightly corrected the direction due to a moron cutting into your line, or avoiding a pothole? You can enabled the AutoResume AutoPilot functionality and Tinkla Relay will do it for you.
2. Do you wish your AutoPilot (non FSD) would adjust the max speed up and down with the recognized speed limit? With Tinkla Relay it does. For Model 3/Y users it even recognizes the % offset configured in the AutoPilot tab and takes that into consideration.
3. Do you find yourself sometimes stuck in CHILL mode and need that extra power, but takes too long to go though the settings? If your Model 3/Y is equipped with Tinkla Relay, you will be able to floor the pedal and gain advantage of all the kWs availble in your car. While the accelerator pedal is pressed more than 92% down, Tinkla Relay will automatically suspend the CHILL mode and give you full power.

Read below for more info.

Tinkla Relay is a device that connects to your Tesla power and CAN and has 4 output relays that are turned on/off based on your settings configured via DIP switches. The maximum output for the relays is 12V and up to 3A total between all on channels at a time. This is enough to drive GPIO signals, trigger relays for larger consumers or turn on notification LEDs.

[Talk: Feedback? Ideas? Comments?](Talk_Feedback__Ideas__Comments_.md)

## What is in the box

1. The Tinkla Relay board
2. Harness specific for you Tesla
3. 3A mini fuse
4. Automotive grade hook and loop tape

## Installing the Tinkla Relay

```
Please ensure you install the 5A fuse into the Tinkla Relay before moving with the install.
```

### Model S & Model X

Tinkla Relay can be either installed using the provided harness directly into the OBD2 port or hardwired directly into the car power and CAN lines. To connect directly to Tinkla Relay you need a Molex 34791-0080 connector with the following wiring:

| Tinkla Relay Wiring |
| --- |
| Pin | Use | Connect to |
| 1 | CAN 1 Low | Chassis CAN Low |
| 2 | CAN 1 High | Chassis CAN High |
| 3 | Not Used | |
| 4 | CAN 2 Low | not used on Model S/X |
| 5 | CAN 2 High | not used on Model S/X |
| 6 | Not Used | |
| 7 | GND | car ground |
| 8 | 12V | car accessory power or permanent power, depending on application |

### Model 3 and Model Y

Tinkla Relay can be installed in less than 15 minutes by simply removing the 4 pins that hold the cover of the passenger footwell in your Model 3/Y and adding the provided harness between the car and the MCU computer.

## AutoPilot Extended Functionality

By enabling the AutoPilot Extended Functionality of Tinkla Relay, you will gain access to some enhancements to your standard or EAP Autopilot.

### AutoPilot AutoResume

You do not have to tap the stalk to re-engage AutoPilot after a slight steering correction, provided that the adaptive cruise-control is still engaged.

Here is how it works:

- When autopilot is disengaged due to a steering correction, the system will start the auto-engage process in the background- It will wait for turn signals to be off
- It will wait for AutoPilot to become available (gray steering icon)
- It will monitor that adaptive cruise control is still engaged
- It will monitor that you are not actively steering (via the hands on wheel detection)
- Once all the conditions have been met, it will start a 1 second timer to ensure that nothing else happens, and it no other events, it will re-engage AutoPilot

```
You can cancel the re-engage process at any time by a simple stalk pull or by hitting the brake pedal or canceling the adaptive cruise control via the stalk.
```

### AutoPilot AutoAdjust Max Speed Limit

Driving on the highway (or on small roads, doesn't matter), and the speed limit changed, but you missed it, and then lucky you, there is a cop waiting 100 yards beyond the speed sign, ready to hand you that bill... That does not have to happen if you have Tinkla Relay installed. Tinkla Relay monitors the speed limit changes that AutoPilot recognizes and immediately adjusts your Max Speed to match. It even takes in consideration your percentage override entered in the settings of a Model 3/Y (not available for S/X at this moment). The Relay just saved your wallet :)

```
If you attempt to manually change the speed limit during an AutoAdjust process, the AutoAdjust will be canceled.
```

## CHILL++ Extra power when you need it

If you drive in Chill mode most of the time (like I do), you will find yourself at times in situations when you wish you were not: merging in traffic, passing somebody, etc. You know you have twice the power in your car, yet you opted for the chill factor that works 98% of the time. With Tinkla Relay you can have your cake and eat it too: between 0% and 90% of your accelerator pedal press, it will continue to operate in the same manner you have it now in Chill mode. Once you go beyond the 92% mark, you will know it. Tinkla Relay recognizes you want more juice and provides it to your wheels instantly. (You will not see the CHILL text vanish from your dash, but you will feel the extra kWs)

## Reading CAN messages

![](images/Cabana_by_Comma_ai.png)

By using the old web based version of[Cabana by Comma.ai](https://cabana.tinkla.us)you can view live streaming of CAN messages from your Tesla (Chassis CAN for Model S/X, Vehicle and Chassis CAN for Model 3/Y). To parse the messages you can select the appropriate dbc file (tesla_modelsx.dbc from Model S/X or[Josh Wardell's](https://github.com/joshwardell/model3dbc)tesla_model3y.dbc for Model 3/Y). Please note that Cabana only works inside Google Chrome.

```
Once you are done reading messages, you will have to make sure you power cycle the Relay to return to normal functionality. The cabana switches the standard functionality of Relay and puts it into a read only mode. The power cycle restored the basic functionality. To power cycle your Relay you have to disconnect both from the harness and from the computer (USB).
```

## Flashing Tinkla Relay Firmware

Sometimes there is a need to update your Tinkla Relay firmware to take advantage of new code releases. In order to do this, you will need access to a computer with internet access and a Chromium based web browser (Google Chrome, Microsoft Edge, Chromium), and a USB cable to connect from your computer to the micro-USB port on the Tinkla Relay.

In order to flash the latest code for Tinkla Relay, go to[https://relay.tinkla.us](https://relay.tinkla.us)and follow the instructions.

## Virtual Buttons

Tinkla Relay creates up to 4 virtual buttons in order to control the relay outputs. These virtual buttons are combinations of quick double presses on existing steering wheel controls. Depending on the configuration selected via the[DIP Switches](Tinkla_Relay.md), these virtual buttons can act alone or in combination with other logic based on car state.

In the table below we show the connection between a virtual button and the corresponding steering wheel button. In order to switch the state of the relay for that corresponding button, the user will have to double-press that particular steering wheel button quickly with no more than 0.75 s between presses.

| Tinkla Relay Virtual Buttons |
| --- |
| Virtual Button Name | MS/MX Steering Wheel Button | M3/MY Steering Wheel Button |
| Button 1 | Menu Command | Right Wheel Tilt Left |
| Button 2 | Voice Command | Right Wheel Tilt Right |
| Button 3 | Right Wheel | Right Wheel |
| Button 4 | Left Wheel | Left Wheel |

## DIP Switches

Switches 1-4 allows you to select one of the pre-configured logic that triggers the 4 relays to turn on or off.

Switch 5 is an overall setting for all 4 relays and, if on, will keep the relays in their state even when car is off. If Switch 6 is off then all relays will be turned off when the car is off.

```
Switch 6 enables Tesla AutoPilot Extended Functionality. Please see more info above.
```

```
Switches 7 and 8 are for future use and should be always kept in the OFF position to avoid device malfunction.
```

| Tinkla Relay Configurations |
| --- |
| DIP Switches | Relays |
| Sw1 | Sw2 | Sw3 | Sw4 | Relay 1 | Relay 2 | Relay 3 | Relay 4 |
| OFF | OFF | OFF | OFF | Button 1 | Button 2 | Button 3 | Button 4 |
| ON | OFF | OFF | OFF | Button 1 + override when car in reverse | Left turn signal | Right turn signal | Brake pressed |
| OFF | ON | OFF | OFF | Button 1 + override when car in reverse | Left turn signal when car in drive | Right turn signal when car in drive | Brake pressed when car in drive |
| ON | ON | OFF | OFF | Button 1 + override when car in reverse | Button 3 | Button 4 | Brake pressed |
| OFF | OFF | ON | OFF | Button 1 + override when car in reverse | Button 3 | Button 4 | Brake pressed when car in drive |
| ON | OFF | ON | OFF | Button 1 + override when car in reverse | High beams on | Button 3 | Button 4 |
| OFF | ON | ON | OFF | Button 1 + override when car in reverse | High beams on when car in drive | Button 3 | Button 4 |
| ON | ON | ON | OFF | Button 1 + override when car in reverse | Car in drive | Car in reverse | Button 4 |
| OFF | OFF | OFF | ON | Button 1 + override when car in reverse | Button 2 | Button 3 | Button 4 |
| ON | OFF | OFF | ON | Button 1 + override when car in reverse | Button 1 + left turn signal | Button 1 + right turn signal | Button 1 + car in drive |
| OFF | ON | OFF | ON | Button 1 + override when car in reverse | Button 2 + car in drive and left turn signal OR speed < 20 MPH and steering angle > 45 deg | Button 2 + car in drive and right turn signal OR speed < 20 MPH and steering angle > 45 deg | Button 4 |
| ON | ON | OFF | ON | Button 1 + override when car in reverse | Button 2 + car in drive and left turn signal OR speed < 20 MPH and steering angle > 45 deg | Button 2 + car in drive and right turn signal OR speed < 20 MPH and steering angle > 45 deg | Button 3 + high beam |
| OFF | OFF | ON | ON | Button 1 + override when car in reverse | Button 2 + car in drive and left turn signal OR speed < 20 MPH and steering angle > 45 deg | Button 2 + car in drive and right turn signal OR speed < 20 MPH and steering angle > 45 deg | Button 3 + high beam when in drive |
| ON | OFF | ON | ON | Button 1 + override when car in reverse | Left side blind spot car present (*) | Right side blind spot car present (*) | Button 2 + high beam when in drive |
| OFF | ON | ON | ON | Button 1 + override when car in reverse | Left side blind spot car present (*) | Right side blind spot car present (*) | Button 2 |
| ON | ON | ON | ON | Button 1 + override when car in reverse | Left side blind spot car present (*) | Right side blind spot car present (*) | Brake pressed when in drive |

```
(*) Requires the 12 sensor park assist option (6 front, 6 back) that was available from Tesla after October 2014.
```

```
If you see use for a different configuration and logic, please do not hesitate to reach out to me on Discord. If the setup has merit and can be used by others as well, i can add it to the code.
```

## How to order Tinkla Relay

Tinkla Relay is available to purchase in our[online store](https://shop.tinkla.us).