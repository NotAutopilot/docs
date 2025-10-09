# Old versions of OP

```
These instructions are for the old versions of OpenPilot that run on EON with white or gray panda. For the latest code and instructions please visit the main page.
```

[Talk: Feedback? Ideas? Comments?](Talk_Feedback__Ideas__Comments_.md) 

Services:Tokens|Vitals| OpenVPN | Tesla Remote |Installs|

****Quick Start****

1. TheTesla Giraffe install guidewill start your journey to driving with OpenPilot.
2. Plug your[Comma.ai Panda](https://comma.ai/shop/products/panda-obd-ii-dongle) into your Giraffe
3. Thenmake and install the EPAS Harness.
4. Install the EONin your windshield.
5. Then[install the Tesla version of OP](EON.md)
6. Finally take your Tesla w/OP for a spin!
7. And if you want to have IC integration (root access not required), now you can withTinkla Buddy

## Getting Pre-AP up to AP1

- Please read and understand theDisclaimers and Licensing.

#### Out of the Box

Well, just few easy mods to your Tesla and OpenPilot does a fairly good job at lane keep assist (LKA) and introduces a limited adaptive cruise control (ACC) based on the OpenPilot vision radar and just regenerative (regen) braking. Also, the system has a built in lane departure warning (LDW). All you need is:

1. anEON, (not a comma two devkit)
2. aPanda,
3. aTesla Giraffe,
4. and a fairly easy to makeEPAS harness.

The cost for this complete setup is about $1,000 USD when getting all the components from Comma.ai and ebay (for the harness).

#### Map Integration

Comma.ai has brought map integrationfor longitudinal control (slowing down in turns for example) and there are plans to start bringing map info into lateral control as well to improve turning. Map integration is a key component for us too in order to improve the turning capabilities of the system.

#### 0 - 18 MPH Upgrade

The "Out of the Box" setup is the basic install for your tesla and can control your acceleration above 18 MPH. ThePedal Interceptoris a small unit that gets connected between your accelerator pedal on your Model S and the Giraffe. While the stock cruise control on Tesla only works above 18 MPH, with the pedal we can control speed down to 1 MPH (though the regen brakes only work above 5 MPH). The benefit of the pedal is better (and smoother) adaptive cruise control over just the stock Tesla cruise control.

#### Tesla Radar Retrofit

With a few more wires and a harness (plus some eBay parts) you can add a Tesla Bosch radarto your pre-AP1 car. With full radar integration now available in OpenPilot, you get more accurate lead car detection which leads to a better ACC (still limited to regen braking). Also, if you have Instrument Cluster integration, now you can see 3 lanes full of cars on your IC.

#### Instrument Cluster

Tinkla Buddywill allow you to visualize the path and cars on your Tesla's Instrument Cluster.

#### Stop-and-Go

The next hurdle for us is integration with iBooster brakes for full stop and go traffic. This will require replacement of the standard vacuum brakes on your pre-AP1 Model S to the iBooster system that Tesla used in the AP1 cars and beyond. This will be about $500-$800 in parts and some more involved mechanical work as you would need to flush your brakes and such. 
Also, root access is needed for this upgrade.

#### Parking Sensors

Finally, we will be integrating the AP1 style parking sensors into the OpenPilot code, allowing us to use the data from the 12 sensors to detect cars around us. This is one step we're hoping to start soon. Depending on where you source the sensors and harness, this alone can be somewhere between $500 and $1,500.

#### AP1 Integration

Once all this is done, we will be able to fully integrate with AP1 cars as well. With Tesla no longer paying any attention to the older Model S (the[AP1](https://en.wikipedia.org/wiki/Tesla_Autopilot#Hardware_1) was based on the MobileEye platform that Tesla dumped in October 2016 and has received limited code updates ever since), the only option to get new features and functionality is by joining the[OpenPilot group](https://community.comma.ai/wiki/index.php/Tesla) .