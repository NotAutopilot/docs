# OpenPilot for preAP Tesla ModelS

****Quick Start****

1. The[Tinkla OBD-C Adapter](Tinkla_OBD-C_Adapter.md)will start your journey to driving with OpenPilot. Check your[car's OBD2 port](Tesla_Model_S_preAP_OBD2_port.md)for the correct pins.
2. [Install the EON Gold/Comma two/Comma three](Comma_devkit.md)in your windshield.
3. Plug your[Comma Three](https://comma.ai/shop/products/three),[Comma Two](https://comma.ai/shop/products/two)or EON Gold with[Black Panda](https://comma.ai/shop/products/panda)into the Tinkla OBD-C Adapter using the USB-C cable that came with your Comma device + an approved[USB-C Extension](https://shop.tinkla.us/USB4-2m-Extension-Cable-For-Comma-Two-Three-p467071951)cable
4. [Install the Tesla version of OP](Comma_devkit.md)
5. [Edit the Tesla specific configuration settings](Tesla_Unity_Configuration.md)
6. [Flash and patch](Comma_devkit.md)your panda and EPAS (pedal and radar too if installed)
7. Finally take your Tesla w/OP for a spin!
8. And if you want to have IC integration (root access not required), now you can withTinkla Buddy

## Getting Pre-AP up to AP1

- Please read and understand the[Disclaimers and Licensing](Tinkla_General_disclaimer.md).

#### Out of the Box

Well, just few easy mods to your Tesla and OpenPilot does a fairly good job at lane keep assist (LKA) and introduces a limited adaptive cruise control (ACC) based on the OpenPilot vision radar and just regenerative (regen) braking. Also, the system has a built in lane departure warning (LDW). All you need is:

1. a supported Comma device (Comma two, Comma three, EON Gold with Black Panda)
2. a[Tinkla OBD-C Adapter](Tinkla_OBD-C_Adapter.md)
3. a 10ft Thunderbolt3 cable

#### 0 - 18 MPH Upgrade

The "Out of the Box" setup is the basic install for your tesla and can control your acceleration above 18 MPH. The[Pedal Interceptor](Pedal_Interceptor.md)is a small unit that gets connected between your accelerator pedal on your Model S and the Giraffe. While the stock cruise control on Tesla only works above 18 MPH, with the pedal we can control speed down to 1 MPH (though the regen brakes only work above 5 MPH). The benefit of the pedal is better (and smoother) adaptive cruise control over just the stock Tesla cruise control.

#### Tesla Radar Retrofit

[With a few more wires and a harness (plus some eBay parts) you can add a Tesla Bosch radar](Tesla_Bosch_Radar.md)to your pre-AP1 car. With full radar integration now available in OpenPilot, you get more accurate lead car detection which leads to a better ACC (still limited to regen braking). Also, if you have Instrument Cluster integration, now you can see the detected cars on your IC.

#### Instrument Cluster

Tinkla Buddywill allow you to visualize the path and cars on your Tesla's Instrument Cluster. Tinkla Buddy only works with the older MCU1 units. It does not work with MCU2 due to the changes Tesla made in the architecture of the device.

#### Stop-and-Go

The next hurdle for us is integration with iBooster brakes for full stop and go traffic. This will require replacement of the standard vacuum brakes on your pre-AP1 Model S to the iBooster system that Tesla used in the AP1 cars and beyond. This will be about $800-$1000 in parts and some more involved mechanical work as you would need to flush your brakes and such. Code for the[SGH Innovations' iBooster with ECU](https://sghinnovations.com/?product=ibooster-controller-ecu)is being tested at the moment.