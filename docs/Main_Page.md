# Welcome to NotAutopilot!

## ⚠️ CRITICAL WARNING - READ FIRST ⚠️

**THIS SOFTWARE IS EXCLUSIVELY FOR PRE-AUTOPILOT TESLA MODEL S (2012-2014) ONLY.**

### 🚨 REAL INCIDENT: A user bricked a Jeep by attempting to install this software on an incompatible vehicle. 🚨

**Using this on ANY other vehicle WILL cause permanent damage.**

**Compatible Vehicle (ONLY):**
- Tesla Model S (2012-2014) WITHOUT Autopilot hardware

**NOT Compatible (WILL DAMAGE):**
- Tesla Model S with AP1/AP2+
- Tesla Model X (any variant)
- Tesla Model 3/Y/Cybertruck
- ANY non-Tesla vehicle

**→ [MANDATORY: Read SAFETY_FIRST.md before proceeding](SAFETY_FIRST.md)**

---

## What is NotAutopilot?

NotAutopilot is open source software built to add advanced driver assistance to **Pre-Autopilot Tesla Model S vehicles (2012-2014)**. It is a focused fork of openpilot specifically designed for this single vehicle platform.

Currently, NotAutopilot performs the functions of Adaptive Cruise Control (ACC), Automated Lane Centering (ALC), Forward Collision Warning (FCW) and Lane Departure Warning (LDW) for Pre-Autopilot Tesla Model S. In addition, while NotAutopilot is engaged, a camera-based Driver Monitoring (DM) feature alerts distracted and drowsy drivers.

**Based on**: openpilot 0.10.2
**Lineage**: boggyver → xnor → NotAutopilot
**Status**: Beta - Research/Development purposes only

---

## Getting Started

**Pre-Autopilot Tesla Model S (2012-2014) ONLY:**

→ **[OpenPilot for preAP Tesla ModelS](OpenPilot_for_preAP_Tesla_ModelS.md)**

**Before installation, you MUST read:**
1. [SAFETY_FIRST.md](SAFETY_FIRST.md) - Critical safety warnings
2. [Hardware_Compatibility.md](Hardware_Compatibility.md) - Hardware requirements
3. [NotAutopilot_General_disclaimer.md](NotAutopilot_General_disclaimer.md) - Legal disclaimers

---

## Key Features

### Core Functionality
- **Adaptive Cruise Control (ACC)** - Maintains speed and following distance
- **Automated Lane Centering (ALC)** - Keeps vehicle centered in lane
- **Forward Collision Warning (FCW)** - Alerts to potential collisions
- **Lane Departure Warning (LDW)** - Alerts when drifting from lane
- **Driver Monitoring (DM)** - Monitors driver attention

### Optional Peripherals

**Pedal Interceptor** (Highly Recommended)
- Enables 0-18 MPH speed control
- Smooth acceleration control
- Essential for stop-and-go traffic
- [Installation Guide](Pedal_Interceptor.md)

**Tesla Bosch Radar** (Recommended)
- Enhanced lead vehicle detection
- Improved ACC performance
- 160m range, 32 object tracking
- [Installation Guide](Tesla_Bosch_Radar.md)

---

## Important Limitations

### This is BETA Software
- Requires full driver attention at ALL times
- Research/development purposes only
- NOT a production product
- You are responsible for safe operation

### Braking Limitations
- **WITHOUT Pedal**: Only regen braking above 18 MPH
- **WITH Pedal**: Regen braking 5-18 MPH only
- **NO hydraulic brake integration**
- **YOU MUST BE READY TO BRAKE MANUALLY**

### Not Included
- ❌ Instrument Cluster (IC) integration - Removed
- ❌ Tinkla Buddy device - Not supported
- ❌ iBooster brake control - Not supported
- ❌ Multi-vehicle support - Pre-AP only

---

## Supported Hardware

### Comma Devices

✅ **Comma 3** - Fully supported
✅ **Comma 3X (C3X)** - Fully supported
⚠️ **Comma 4** - Untested

❌ **Comma Two** - Not supported
❌ **EON Gold/EON** - Not supported

**[→ Complete hardware compatibility matrix](Hardware_Compatibility.md)**

---

## Software Design History

### NotAutopilot (Current)

NotAutopilot is a focused fork that:
- Supports Pre-Autopilot Tesla Model S ONLY
- Removes multi-vehicle complexity
- Removes IC/Buddy integration
- Emphasizes safety and clear boundaries
- Maintains excellent Pre-AP support

### Core Features

NotAutopilot includes these essential capabilities:

**Vehicle Control:**
- EPAS control and patching
- Pedal Interceptor integration
- Tesla Bosch Radar integration
- Tesla Unity configuration system
- UI-based flashing for all components
- Universal calibration tools

**Not Included:**
- AP1/AP2 vehicle support
- Instrument Cluster integration
- Tinkla Buddy device support
- iBooster brake control
- Multi-vehicle configuration

**[→ See complete project history](Project_History.md)**

---

## Documentation

### Essential Reading
- [SAFETY_FIRST.md](SAFETY_FIRST.md) - Critical safety warnings
- [Hardware_Compatibility.md](Hardware_Compatibility.md) - Hardware matrix
- [Project_History.md](Project_History.md) - Project lineage and philosophy
- [NotAutopilot_General_disclaimer.md](NotAutopilot_General_disclaimer.md) - Legal disclaimers

### Installation & Configuration
- [OpenPilot for preAP Tesla ModelS](OpenPilot_for_preAP_Tesla_ModelS.md) - Installation guide
- [Tesla_Unity_Configuration.md](Tesla_Unity_Configuration.md) - Configuration guide
- [Pedal_Interceptor.md](Pedal_Interceptor.md) - Pedal installation
- [Tesla_Bosch_Radar.md](Tesla_Bosch_Radar.md) - Radar installation

### Technical Documentation
- [Tesla CAN Bus](Tesla_CAN_Bus.md) - CAN architecture
- [EPAS Harness](EPAS_harness.md) - Steering harness
- [The Panda](The_Panda.md) - CAN interface
- [Tinkla OBD-C Adapter](Tinkla_OBD-C_Adapter.md) - Connection adapter

### Advanced Topics
- [Longitudinal Control (ACC)](Longitudinal_Control__ACC.md) - ACC details
- [Cabana](Cabana.md) - CAN bus analysis
- [SSH Into Your Device](SSH_Into_Your_Device.md) - Device access

---

## Disclaimers & Legal

### Important Warnings

**Modifying your car can result in damage, injury, or death. Do not modify your car unless you understand and accept those risks. You alone are ultimately responsible, not the creator of this software, Comma.ai, the Comma.ai community, Tesla, or anyone else.**

### Licensing

NotAutopilot is released under the MIT license (inherited from openpilot). Some parts of the software are released under other licenses as specified.

Any user of this software shall indemnify and hold harmless Comma.ai, Inc. and its directors, officers, employees, agents, stockholders, affiliates, subcontractors and customers from and against all allegations, claims, actions, suits, demands, damages, liabilities, obligations, losses, settlements, judgments, costs and expenses (including without limitation attorneys' fees and costs) which arise out of, relate to or result from any use of this software by user.

**THIS IS BETA QUALITY SOFTWARE FOR RESEARCH PURPOSES ONLY. THIS IS NOT A PRODUCT. YOU ARE RESPONSIBLE FOR COMPLYING WITH LOCAL LAWS AND REGULATIONS. NO WARRANTY EXPRESSED OR IMPLIED.**

**[→ Full disclaimer](NotAutopilot_General_disclaimer.md)**

---

## Ready to Install?

### Pre-Installation Checklist

- [ ] I have a Pre-Autopilot Tesla Model S (2012-2014)
- [ ] I have verified my vehicle does NOT have Autopilot hardware
- [ ] I have read SAFETY_FIRST.md completely
- [ ] I have read the general disclaimer
- [ ] I understand this is BETA software requiring full driver attention
- [ ] I accept all risks, responsibilities, and liabilities
- [ ] I have compatible hardware (Comma 3 or C3X)
- [ ] I understand I must be ready to brake manually at all times

### All Boxes Checked?

**→ [Proceed to Installation Guide](OpenPilot_for_preAP_Tesla_ModelS.md)**

### Have Doubts?

**DO NOT INSTALL.**

Review all documentation carefully, verify vehicle compatibility, and ensure you fully understand the risks before proceeding.

---

## Project Information

**Project**: NotAutopilot
**Base**: openpilot 0.10.2
**Lineage**: boggyver → xnor (Lukas Loetkolben) → NotAutopilot
**Vehicle**: Pre-Autopilot Tesla Model S (2012-2014) ONLY
**Status**: Beta
**License**: MIT

**Acknowledgments:**
- boggyver (Tesla integration pioneer)
- Lukas Loetkolben (xnor maintainer)
- comma.ai (openpilot creators)
- Tesla community (testing and support)

---

*Drive safely. Stay alert. Take responsibility.*

**This is experimental software. You are responsible for your vehicle's safe operation.**
