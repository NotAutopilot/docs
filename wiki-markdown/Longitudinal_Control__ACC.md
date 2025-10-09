# Longitudinal Control: ACC

Longitudinal control, or addaptive cruise control (ACC), is the capability to accelerate and slow down the car based on traffic, user max speed settings and map information integration (curvature, traffic, etc). This is an ongoing effort. These pre-AP cars lack electronic[pedal control](The_Comma.ai_Pedal.md)for (acceleration and braking) and[radar](Tesla_Bosch_Radar.md).

As of 2019 we have both software-only and hardware-based Adaptive Cruise Control.

```
Without electric brakes (iBooster) the car only uses regenerative braking. This is not enough for suddent slowdowns. YOU MUST BE READY TO MANUALLY BRAKE AT ANY MOMENT.
```

### Vision Radar With Spam ACC

The easiest setup is to use the vision only "mock" radar in OpenPilot. It works OK on highway if there are not many speed changes. The radar accuracy has improved since 0.5.11 but still has a 1-2 seconds delay vs real time. Also, it only tracks one car, the lead car. In order to use this for longitudinal control, we use CAN messages to create fake cruise stalk messages, increasing/decreasin the speed by 1 (half action) or 5 (full action). This creates the desired outcome but the speed changes are not very smooth. Also, the Tesla CC (and thus OP ACC using cruise stalk spamming) only works above 18 MPH (29 km/h).

### Vision Radar With Pedal

The next step up is to replace the CC stalk spamming with a[pedal interceptor](The_Comma.ai_Pedal.md). This allows speed control from 1 MPH (1.6 km/h) but you need to keep in mind that regenerative braking only works above 5 MPH (8 km/h). The cost of this updgrade is about $100.00 USD.

### Tesla Bosch Radar With Pedal

Next upgrade would be to add a[Tesla Bosch Radar](Tesla_Bosch_Radar.md). This increases the cars/objects tracked from 1 to 32 and allows real time monitoring of distance and relative speed for lead car and cars on the side lanes, increasing the smoothness and precision of the ACC. This is still limitted in braking power. If you have[IC/CID integration](Root_Access_To_IC_and_CID.md), this feature shows up to 6 cars on the IC. The cost of this upgrade is about $500.00 USD and requires some extensive work (including removing and re-installing the front bumper).

### Tesla Bosch Radar With iBooster

Final upgrade for ACC in order to obtaing full stop and go capabilities is to replace your old vacuum based braking system with an electronic braking system (iBooster). This code is in development as of May 2019. The cost for this upgrade is about $6-700.00 USD and requires[root access](Root_Access_To_IC_and_CID.md)and knowledge on how to flush your brake lines. This feature will give you full stop-n-go capability.

### Using Adaptive Cruise Control

```
To repeat, without electric brakes (iBooster) the car only uses regenerative braking. This is not enough for sudden slowdowns. YOU MUST BE READY TO MANUALLY BRAKE AT ANY MOMENT.
```

Adaptive Cruise Control allows the car to match speed with cars in front of you, slows down for turns based on Comma OP logic and also accelerates up to the MAX set speed. We have two types of adaptive cruise control based on your car configuration and options installed: ACC which is based on Tesla CC and PCC which uses the[pedal interceptor](Pedal_Interceptor.md).

Follow these steps to use ACC:

1. Press the cruise stalk IN so that the orange "cruise control ready" LED on the stalk is lit.
2. Enable the ACC option on the[EON](EON.md)screen if necessary.
3. Accelerate above 18 MPH.
4. Enable OpenPilot using a DOUBLE stalk pull (pull the cruise control stalk BACKWARDS TWICE in quick succession.) You will see the blue 'Cruise' icon appear on your dash. If you have[IC/CID integration](Root_Access_To_IC_and_CID.md), the speed will be set to the speed limit for that road + the set offset in the OpenPilot screen in CID. ACC is now active.
5. The initial max speed may be conservative. Press UP on the stalk to increase it.
You can also accelerate manually to temporarily drive faster than current cruise speed. This will not disable ACC.
6. Cruise is disabled if you brake or the car slows below 18 MPH.
7. If ACC "AUTO" mode is enabled, manually accelerate above 18 MPH to resume.

Follow these steps to use PCC:

1. Press the cruise stalk IN so that the orange "cruise control ready" LED on the stalk is not lit (or set the[OpenPilot Configuration File](OpenPilot_Configuration_File.md)to use pedal always over CC)
2. Enable the PCC option on the[EON](EON.md)screen if necessary.
3. Accelerate above 1 MPH.
4. Enable OpenPilot using a DOUBLE stalk pull (pull the cruise control stalk BACKWARDS TWICE in quick succession.) You will see the blue 'Cruise' icon appear on your dash. If you have[IC/CID integration](Root_Access_To_IC_and_CID.md), the speed will be set to the speed limit for that road + the set offset in the OpenPilot screen in CID. PCC is now active.
5. The initial max speed may be conservative. Press UP on the stalk to increase it.
Please note: As long as your foot touches the accelerator pedal, it will completely override PCC control.
6. Cruise is disabled if you brake.

Controls while ACC or PCC are enabled:

| Control | Action |
| --- | --- |
| Cruise stalk IN | Master toggle for cruise control. Must be engaged for ACC to work, if you have a Pedal then engaged is for regular CC (no steering or speed control). Must be disengaged for PCC to work. When`force_pedal_over_cc`is true, PCC will be used regardless of the stalk position. |
| Cruise stalk SINGLE PULL | Enable OP steering. Disables ACC or PCC if it was active at the time of pulling. |
| Cruise stalk DOUBLE PULL | Enable OP steering and ACC or PCC and updates the max allowed cruise speed based on your current speed. |
| Cruise stalk UP | Increase cruise speed, increasing max allowed ACC/PCC speed if necessary. |
| Cruise stalk DOWN | Decrease cruise speed and max allowed ACC/PCC speed. |
| Cruise stalk PUSH | Disable OpenPilot (both steering and ACC/PCC). |
| Cruise stalk DOUBLE 1/2 DOWN | If the on screen ACC button has "CC" displaying, this will engage regular stock Tesla CC without auto-steer or regenerative braking. |
| Brake pedal | Pause both ACC/PCC and traditional cruise. |
| Accelerator | (When in AUTO mode) Accel over 18 MPH to unpause ACC. No effect on PCC. Overrides the long control for both ACC and PCC. |
| On screen ACC/PCC button | Toggle between "FOLLOW", "AUTO", and "CC" modes for ACC and "FOLLOW" and "OP" modes for PCC. **FOLLOW**mode attempts to match speed with cars in front of you and disengages if you steer or brake. **AUTO**mode does the same, but automatically re-engages when you accelerate again. **CC**mode for ACC will engage regular Cruise Control:Auto-Steering Offand Speed Control Off. **OP**mode is the built in Comma OP logic. |
| On CID buttons | Toggle between 2.5, 2, 1.5 and 1 second follow distance options. |

### Using Regular Cruise Control

Beginning in OpenPilot v0.6.6, we have brought back Tesla's stock Cruise Control as an option to maintain your car's speed when OP can not see well enough to stay engaged or where you deem conditions are not safe enough to allow OP to steer the car for you, i.e. when there is snow or rain and OP can't clearly detect the road lines. OP auto-detects if you have a Pedal interceptor and if you do, when you press the cruise stalk IN so that the orange "cruise control ready" LED on the stalk is lit, PCC is off and regular CC is available.**YOU ARE IN CONTROL, not OP.**

Follow these steps to use stock CC:

1. Press the cruise stalk IN so that the orange "cruise control ready" LED on the stalk is lit. (If you have a Pedal and[OpenPilot Configuration File](OpenPilot_Configuration_File.md)is set to use pedal always over CC, this won't work.)
2. Set the ACC option on the[EON](EON.md)screen to CC if necessary. (If you have a Pedal, CC should be selected by default)
3. Accelerate above 18 MPH.
4. Enable Cruise Control pressing DOUBLE 1/2 DOWN on the stalk (press the cruise control stalk halfway DOWN TWICE in quick succession.) You will see the blue 'Cruise' icon appear on your dash. If you have[IC/CID integration](Root_Access_To_IC_and_CID.md), the speed will be set to the speed you were going. Tesla's stock CC is now active.
5. Press UP or DOWN on the stalk to increase or decrease speed.
Please note: CC is not controlled by OpenPilot, you are in control.
6. Cruise is disabled if you brake.