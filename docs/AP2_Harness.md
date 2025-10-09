# AP2 Harness

```
For the best experience, just purchase our Tinkla OBD-C Adapter for Tesla with AP2+ for $150 from our online store
```

or

build your own for about $440 + tools and a lot of crimping :)

## Two Options

- AP2 controls steering using the Chassis CAN and acceleration/braking through the Powertrain CAN, thus it requires two harness for complete control from OpenPilot.
- Only a Comma three can control multiple pandas using the additional USB-C port. Hence a Comma two can only handle lateral control.

## Using OpenPilot with just lateral control

- When using the OpenPilot on a Tesla with AP2/2.5/3, you have the option to configure the software (via the UI toggles) to only do lateral control, and let the built in adaptive cruise control handle the longitudinal control.
- To do this, you will need a Comma two or Comma three plus a[Lateral Control Harness](https://github.com/commaai/neo/blob/master/car_harness/Tesla_AP2%2B_Harness.sch.pdf) by following the instructions in the Comma repository.

## Using OpenPilot with full control

To allow OpenPilot to fully (lateral and longitdinal) control your Telsa equipped with AP2/2.5/3, you need the following:

- A Comma three
- A black panda (for longitudinal control)
- Two[Comma Car Harnesses](https://comma.ai/shop/products/comma-car-harness) for Development Vehicles
- Connectors and pin as listed in[this diagram](https://github.com/commaai/neo/blob/master/car_harness/Tesla_AP2%2B_Harness.sch.pdf) to build both the lateral control harness and the longitdinal control harness]
- Some quiet time to sit down and build your harnesses