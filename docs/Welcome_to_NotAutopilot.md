# Welcome to NotAutopilot!

## ⚠️ CRITICAL: Vehicle Compatibility Warning

**THIS SOFTWARE IS EXCLUSIVELY FOR PRE-AUTOPILOT TESLA MODEL S (2012-2014) ONLY.**

Using this on any other vehicle WILL cause damage. A user bricked a Jeep attempting this.

**[→ READ SAFETY_FIRST.md BEFORE PROCEEDING](SAFETY_FIRST.md)**

---

## What is NotAutopilot?

NotAutopilot is an openpilot fork specifically designed for **Pre-Autopilot Tesla Model S vehicles (2012-2014 only)**. It provides driver assistance features including Adaptive Cruise Control (ACC), Automated Lane Centering (ALC), Forward Collision Warning (FCW), and Lane Departure Warning (LDW).

**Based on**: openpilot 0.10.2
**Lineage**: Fork of xnor (by Lukas Loetkolben), which is a fork of tinkla (by boggyver)

### What NotAutopilot Does

Currently, NotAutopilot performs the following functions for Pre-Autopilot Tesla Model S:

- **Adaptive Cruise Control (ACC)**: Maintains set speed and following distance from lead vehicle
- **Automated Lane Centering (ALC)**: Keeps your vehicle centered within lane markings
- **Forward Collision Warning (FCW)**: Alerts you to potential front collisions
- **Lane Departure Warning (LDW)**: Alerts you when drifting from your lane
- **Driver Monitoring (DM)**: Camera-based monitoring that alerts distracted or drowsy drivers

### Important Limitations

**This is BETA software:**
- Requires full driver attention at ALL times
- You are responsible for safe operation
- Research/development purposes only
- Not a production product

**Braking Limitations:**
- WITHOUT Pedal: Only regen braking above 18 MPH
- WITH Pedal: Regen braking 5-18 MPH
- NO hydraulic brake integration (no iBooster)
- **YOU MUST BE READY TO BRAKE MANUALLY**

---

## What's Different from Tinkla?

NotAutopilot is a **focused fork** that supports **Pre-AP Model S ONLY**:

### ✅ What's Included

- Pre-Autopilot Tesla Model S (2012-2014) support
- Pedal Interceptor integration (0-18 MPH control)
- Tesla Bosch Radar integration (enhanced detection)
- Tesla Unity configuration system
- UI-based flashing for panda, EPAS, pedal, radar
- Core openpilot features (ACC, LKA, FCW, LDW, DM)

### ❌ What's NOT Included (Removed from Tinkla)

- ~~Tesla Model S/X with AP1 support~~ - REMOVED
- ~~Tesla Model S/X with AP2+ support~~ - REMOVED
- ~~Instrument Cluster (IC) integration~~ - REMOVED
- ~~Tinkla Buddy device~~ - REMOVED
- ~~iBooster brake integration~~ - REMOVED
- ~~Multi-vehicle configuration options~~ - REMOVED

**Why?** NotAutopilot focuses on doing one thing well: excellent support for Pre-AP Model S with clear safety boundaries.

**[→ See full project history and rationale](Project_History.md)**

---

## Getting Started

### Before You Begin

**MANDATORY READING:**

1. **[SAFETY_FIRST.md](SAFETY_FIRST.md)** - Critical safety warnings and vehicle compatibility
2. **[Hardware_Compatibility.md](Hardware_Compatibility.md)** - Supported hardware matrix
3. **[NotAutopilot_General_disclaimer.md](NotAutopilot_General_disclaimer.md)** - Legal disclaimers and liability

### Installation Guide

**For Pre-Autopilot Tesla Model S (2012-2014):**

→ **[OpenPilot for preAP Tesla ModelS](OpenPilot_for_preAP_Tesla_ModelS.md)**

This comprehensive guide covers:
- Required hardware
- Installation steps
- EPAS harness setup
- Optional Pedal Interceptor installation
- Optional Tesla Bosch Radar installation
- Configuration and calibration

---

## Supported Hardware

### Comma Devices

✅ **Comma 3** - Fully supported and tested
✅ **Comma 3X (C3X)** - Fully supported and tested
⚠️ **Comma 4** - Untested (use at your own risk)

❌ **Comma Two** - Not supported
❌ **EON Gold** - Not supported

### Required Components

- Comma 3 or C3X device
- Black Panda (included with Comma device)
- Tinkla OBD-C Adapter
- EPAS harness
- USB-C cable and extension

### Optional Peripherals (Recommended)

**Pedal Interceptor** (Highly Recommended)
- Enables 0-18 MPH speed control
- Smooth acceleration via openpilot
- Essential for stop-and-go traffic
- [Installation Guide](Pedal_Interceptor.md)

**Tesla Bosch Radar** (Recommended)
- Significantly improves lead car detection
- Enhances ACC performance
- 160m range, 32 object tracking
- [Installation Guide](Tesla_Bosch_Radar.md)

**[→ Full hardware compatibility matrix](Hardware_Compatibility.md)**

---

## Feature Overview

### Core Features

| Feature | Status | Notes |
|---------|--------|-------|
| Lane Keep Assist (LKA) | ✅ Included | Requires clear lane markings |
| Adaptive Cruise Control (ACC) | ✅ Included | Above 18 MPH (regen only) |
| Forward Collision Warning (FCW) | ✅ Included | Visual and audio alerts |
| Lane Departure Warning (LDW) | ✅ Included | Visual and audio alerts |
| Driver Monitoring (DM) | ✅ Included | Camera-based attention monitoring |

### With Optional Peripherals

| Feature | Requires | Status |
|---------|----------|--------|
| ACC 0-18 MPH | Pedal Interceptor | ✅ Included |
| Enhanced Lead Detection | Tesla Bosch Radar | ✅ Included |
| Multiple Acceleration Profiles | Pedal Interceptor | ✅ Included |

### NOT Included

| Feature | Status | Why |
|---------|--------|-----|
| Instrument Cluster Integration | ❌ Removed | Complexity, Buddy hardware required |
| iBooster Brake Control | ❌ Removed | Experimental, requires brake system replacement |
| Multi-vehicle Support | ❌ Removed | Focus on Pre-AP only |

---

## Software Design History

### NotAutopilot Releases

**Current Version**: Based on openpilot 0.10.2 + tinkla/xnor codebase

**Key Features:**
- Pre-AP Tesla Model S support only
- Streamlined single-vehicle configuration
- Enhanced safety documentation
- Removed unsupported features (IC, Buddy, AP1/AP2)

### Inherited from Tinkla

NotAutopilot inherits significant functionality from the tinkla project:

**Core Pre-AP Features (Retained):**
- EPAS control and patching
- Pedal Interceptor integration with multiple profiles
- Tesla Bosch Radar integration with VIN learning
- Universal pedal calibration tool
- Radar calibration tools
- Tesla Unity configuration system
- UI-based flashing for all components
- Adjustable follow distance
- Automatic speed limit adjustment with offset
- Human steering override with re-engagement delay
- Sound toggles and customization

**Multi-Vehicle Features (Removed):**
- AP1/AP2 support and configuration
- Instrument Cluster integration
- Tinkla Buddy features
- iBooster experimental code
- Vehicle-specific toggles for AP cars

**[→ See complete tinkla changelog in original Welcome_to_Tinkla_.md](Welcome_to_Tinkla_.md)** *(archived for reference)*

---

## Configuration

### Tesla Unity Configuration

All configuration is done through the **Tesla Unity** settings interface in the Comma device UI:

**No SSH required for:**
- Flashing Panda firmware
- Flashing Pedal Interceptor firmware
- Patching EPAS
- Radar VIN Learning
- Adjusting follow distance
- Setting speed limit offset
- Configuring pedal profiles
- Sound settings
- Driver monitoring settings

**[→ Full configuration guide](Tesla_Unity_Configuration.md)**

---

## Technical Documentation

### Vehicle-Specific

- [Tesla CAN Bus](Tesla_CAN_Bus.md) - Pre-AP CAN architecture
- [Tesla Model S preAP OBD2 port](Tesla_Model_S_preAP_OBD2_port.md) - Pin configuration
- [EPAS Harness](EPAS_harness.md) - Steering harness details

### Hardware

- [The Panda](The_Panda.md) - Black Panda information
- [Tinkla OBD-C Adapter](Tinkla_OBD-C_Adapter.md) - Connection adapter
- [Power Options For Accessories](Power_Options_For_Accessories.md)

### Peripherals

- [Pedal Interceptor](Pedal_Interceptor.md) - Complete pedal guide
- [Tesla Bosch Radar](Tesla_Bosch_Radar.md) - Complete radar guide
- [Tesla Giraffe](Tesla_Giraffe.md) - If applicable

### Advanced

- [Longitudinal Control (ACC)](Longitudinal_Control__ACC.md)
- [Cabana](Cabana.md) - CAN bus analysis tool
- [SSH Into Your Device](SSH_Into_Your_Device.md)
- [AWG Chart](AWG_chart.md) - Wire gauge reference

---

## Important Disclaimers

### Legal & Liability

**You must read and accept:**

**[NotAutopilot General Disclaimer](NotAutopilot_General_disclaimer.md)**

Key points:
- This is BETA software for research purposes
- You assume ALL responsibility and liability
- You must comply with local laws
- NO WARRANTY expressed or implied
- Modifying your car carries risks of damage, injury, or death

### Safety Reminders

1. **Vehicle Compatibility**: Pre-AP Model S (2012-2014) ONLY
2. **Driver Responsibility**: Full attention required at all times
3. **Braking**: You must be ready to brake manually
4. **Weather**: Performance affected by environmental conditions
5. **Limitations**: Not suitable for all driving conditions

**This is NOT autonomous driving. This is driver assistance.**

---

## Getting Help

### Documentation

Start with these key documents:
1. [SAFETY_FIRST.md](SAFETY_FIRST.md) - Safety warnings
2. [Hardware_Compatibility.md](Hardware_Compatibility.md) - Hardware info
3. [OpenPilot_for_preAP_Tesla_ModelS.md](OpenPilot_for_preAP_Tesla_ModelS.md) - Installation guide
4. [Tesla_Unity_Configuration.md](Tesla_Unity_Configuration.md) - Configuration

### Troubleshooting

- Check component-specific documentation
- Verify all connections
- Review configuration settings
- Ensure firmware is up to date

### Community

NotAutopilot builds on the work of:
- boggyver (tinkla creator)
- Lukas Loetkolben (xnor)
- comma.ai (openpilot creators)
- Tesla community

---

## Ready to Install?

### Pre-Installation Checklist

- [ ] I have a Pre-Autopilot Tesla Model S (2012-2014)
- [ ] I have read SAFETY_FIRST.md completely
- [ ] I have read the general disclaimer
- [ ] I understand this is BETA software
- [ ] I accept all risks and responsibilities
- [ ] I have compatible hardware (Comma 3 or C3X)
- [ ] I understand I must maintain full driver attention

### If All Boxes Are Checked

**→ [Proceed to Installation Guide](OpenPilot_for_preAP_Tesla_ModelS.md)**

### If You Have Doubts

**DO NOT PROCEED.**

Review the documentation, verify your vehicle compatibility, and ensure you understand the risks.

---

## Project Information

**Project**: NotAutopilot
**Base**: openpilot 0.10.2
**Lineage**: tinkla (boggyver) → xnor (Lukas Loetkolben) → NotAutopilot
**Focus**: Pre-Autopilot Tesla Model S (2012-2014) only
**Status**: Beta
**License**: MIT (inherited from openpilot)

**[→ Full project history](Project_History.md)**

---

*Drive safely. Stay alert. Take responsibility.*

**This is experimental software. You are responsible for your vehicle's safe operation.**
