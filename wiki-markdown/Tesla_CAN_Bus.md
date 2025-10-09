# Tesla CAN Bus

Tesla CAN Connectors
### General Info

The Tesla CAN Bus system comprises of 6 standard CAN busses + one EtherCAN bus.

Most of the 6 regular busses can be access via either the OBD-II connector located in the driver side footwell (1 bus prior to 5/31/2013; 2 busses after 5/31/2013) or the CAN Bus diagnostic port (4 busses) which is located under the CID (one needs to remove the panel from underneath the CID to access it).

The EtherCAN uses UDP encapsulation to broadcast the CAN messages (8 bytes long) on port 20101 on the network between the Gateway, the CID and the IC.

The Gateway is the central hub for connecting all the 7 busses. It does all the translation and forwarding of CAN messages between the busses. Sometimes the messages are sent with the same ID between CAN busses, sometimes the ID changes.

### Security and Data Consistency

Most messages have a counter. The counter is usually on 4 bytes, thus mod 16.

Most messages have either a checksum byte or a CRC byte.

- The checksum is usually computer by just adding (mod 256) all the octets PLUS the high and low octets of the ID.
- The CRC (when required) is the SAE J1850 CRC algorithm.

### Body CAN

The Body CAN bus on Tesla has about 10+ modules (depending on options), including:

- DDM/PDM - Door Controller
- EFUSE - E-fuse Controller
- GTW - Gateway
- LFT - Liftgate Controller
- SEC - Security
- SUN - Sunroof
- TUNER - Radio

### Body Fault Tolerant CAN

The Body Fault Tolerant CAN on Tesla has 5+ modules (depending on options), including:

- BCS - Body Control for Seats
- GTW - Gateway
- MSM - Memory Seat Module
- PTC - Positive Temperature Coefficient - Air Heater
- RCCM - Remote Climate Control Module

### Chassis CAN

The Chassis CAN bus on Tesla has about 10+ modules (depending on options), including:

- DAS - AutoPilot 1 hardware (if equipped)
- EPAS - Electric Power Steering
- EPB - Electronic Parking Brake
- GTW - Gateway
- PARK - Parking Assist
- TAS - Air Susspension
- SCCM/STW - Steering Wheel Controls
- TPMS - Tire Pressure Monitoring System

### Powertrain CAN

The Powertrain CAN bus on Tesla has about 9+ modules, including:

- BMS - Battery Management System
- CHG/FC - Charging System
- CP - Charging Port
- DCDC - DC-DC Charger
- DI - Drive/Inverter Module
- GTW - Gateway
- PM - Pedal Module
- PMS - Power Managment System
- THC - Thermal Control