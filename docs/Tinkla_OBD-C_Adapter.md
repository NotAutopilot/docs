# Tinkla OBD-C Adapter

Tinkla OBD-C Adapter
## What it does

TheTinkla OBD-C Adapterwhich can be purchased from our[online store](https://shop.tinkla.us/Tinkla-OBD-C-Adapter-p452345118) replaces the previous harness that was needed in the early iterations of OpenPilot for preAP Tesla Model S.

Designed specifically to work with the latest versions of Tesla Unity and Comma two/Comma three dev kits (as well as EON Gold with Black Panda), this little device plugs into your OBD2 port and creates the needed interface between the Comma devkit and your car. It also have additional ports to allow to connect a[Pedal Interceptor](Pedal_Interceptor.md) or to power your[Tinkla Buddy](Tinkla_Buddy.md) .

Inside the device there are 3 more expansion ports that allow you to hook up additional equipment, such as a[Tesla Bosch Radar](Tesla_Bosch_Radar.md) .

Tinkla OBD-C Adapter Schematics
## Connections

- **OBD2 Connector**: this connector plugs directly into your[preAP Tesla Model S OBD2 port](Tesla_Model_S_preAP_OBD2_port.md) located in the driver's footwell.
- **OBD-C Port**: this port allows you to connect your Comma devkit to the Tinkla OBD-C Adapter using a[Thunderbolt3](https://www.amazon.com/gp/product/B07WXQT9P8?th=1) cable. This offers +12v, ground and access to 3 CAN buses for the Comma devkit.**Do not plug anything else in this port as it will most likely fry the equipment. This is NOT a standard USB-C port!**
- **RJ45 for Pedal Interceptor**: This port allows you to connect your[Pedal Interceptor](Pedal_Interceptor.md) to the harness using a standard RJ45 Ethernet cable.**Do not plug anything else in this port as it will most likely fry the equipment. This is NOT a standard RJ45 port!**
- **USB A Port**: This port allows you to power your Tinkla Buddy directly from the Tinkla OBD-C Adapter. It offers 5V/2A power on standard USB power pins.
- **JST2.5 connector for CAN0**: This connector allows you to connect other equipment to the chassis can.
- **JST2.5 connector for CAN1**: This connector allows you to connect a[Tesla Bosch Radar](Tesla_Bosch_Radar.md) . It already has an 120 ohm resistor to terminate the CAN connection.
- **JST2.5 connector for CAN2**: This connector allows you to connect a[Pedal Interceptor](Pedal_Interceptor.md) (if yours does not have the RJ45 connector) or other equipment to CAN2. It has a built in 60ohm terminator for the CAN connection.