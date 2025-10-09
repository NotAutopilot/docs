# Panda

```
The newer Comma devkits (Comma two and Comma three) have a built-in Panda which is similar in hardware to the Black Panda. This article is for the older versions of Panda used with EON, like the White Panda and the Grey Panda.
```

The Panda is an OBD II dongle created by Comma.ai. It allows the EON to talk to the car via [CAN bus](Tesla_CAN_Bus.md) messaging. It supports 3 CAN buses, 2 LIN buses, and 1 GMLAN.

The software for the Panda is opensource (and heavily modified for Tesla). When installed on a Tesla, the Panda (by itself) creates all the messages to emulate a DAS (the AutoPilot computer) as well as to keep the Bosch radar talking. It has CAN0 connected to the Tesla Chassis CAN, CAN1 connected to the Bosch radar, and CAN2 connected to the Tesla [EPAS](https://en.wikipedia.org/wiki/Power_steering#Electric_systems)(the electric power steering).

There are two "flavors" of Panda:

- White Panda: $99 USD - The white panda has WiFi and USB capabilities and can work directly with your computer running [Cabana](Cabana.md).
- Grey Panda: $199 USD - The grey panda has high precision GPS (to be used with maps integration) but no wifi and can't be used with [Cabana](Cabana.md).

Both versions are currently fully supported because we actually use the Tesla GPS for maps integration.
I have both pandas due to the amount of development I do. I use the Grey Panda for driving the car and I use the White Panda for debugging/monitoring/reverse engineering CAN messages (in conjunction with an OBD II splitter).

The Comma.ai Panda can be purchased from the [Comma.ai store](https://comma.ai/shop/products/panda-obd-ii-dongle).

### Flashing the Panda

After installing or updating OpenPilot on your EON, you need to also update the software on your Panda. Here's how:

In your Tesla while it says “Car Off” connect your Panda to your Giraffe rev B OBD (or EPAS OBD). Connect your EON to the Panda via USB. Then SSH in and run:

```
cd /data/openpilot/panda/board
killall boardd
make clean
make && sleep 1 && (make recover || make recover) && echo Success! Rebooting in 2s... && sleep 2 && reboot
```

The kill command ensures that the EON stops regular communication to the Panda. That's also why a reboot is needed at the end. If any error occurs (which of course should not happen) the reboot will be skipped so you can troubleshoot.
AssertionErrors should be fixed by rebooting EON and trying a second time. Optionally you may also power cycle your Panda by reseating it.

#### Future updates

Tesla OP is constantly being developed, tweaked, and improved. Therefore, there will be future updates which will require pulling an update and flashing your Panda. To save ourselves some time, the developers have introduced an easy way to run the commands in the "Flashing the Panda" section. Simply follow the instructions in [EON_bash_profile](EON_bash_profile.md) to setup a .bash_profile for your EON. Then you simply run the following command while your Tesla says “Car Off” and your Panda is connected to your Giraffe's OBD and your EON:

```
fp
```