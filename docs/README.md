# NotAutopilot Documentation

## 🚨 STOP - READ THIS FIRST 🚨

# ⚠️ CRITICAL VEHICLE COMPATIBILITY WARNING ⚠️

## THIS SOFTWARE IS EXCLUSIVELY FOR PRE-AUTOPILOT TESLA MODEL S (2012-2014) ONLY

### **DO NOT USE ON ANY OTHER VEHICLE**

---

## 🚨 REAL INCIDENT: VEHICLE BRICKING 🚨

**A user attempted to install this system on a Jeep and permanently bricked the vehicle.**

The vehicle became completely inoperable and required expensive professional repair. This software interfaces with critical vehicle control systems and is specifically engineered for the Pre-Autopilot Tesla Model S CAN bus architecture.

### Using This on ANY Other Vehicle WILL Cause:

- ✗ **Permanent damage** to vehicle control systems
- ✗ **Loss of steering, braking, and traction control**
- ✗ **Complete vehicle bricking** (inoperable)
- ✗ **Expensive repairs** (thousands of dollars)
- ✗ **Safety hazards** and potential injury
- ✗ **Legal liability** for damages

---

## Compatible Vehicle (ONLY ONE)

### ✅ Tesla Model S (2012-2014) **WITHOUT Autopilot Hardware**

**Specifically:**
- Pre-Autopilot Model S
- Production years: 2012, 2013, 2014
- Has EPAS (Electric Power Assisted Steering)
- Does **NOT** have any Autopilot hardware

**If you are unsure about your vehicle, DO NOT INSTALL.**

---

## NOT Compatible (WILL DAMAGE)

### ✗ ALL of These Will Be Damaged:

- ❌ Tesla Model S with AP1 (Autopilot Hardware 1.0)
- ❌ Tesla Model S with AP2/AP2.5/AP3 (2016+)
- ❌ Tesla Model X (any year, any configuration)
- ❌ Tesla Model 3 (any year, any configuration)
- ❌ Tesla Model Y (any year, any configuration)
- ❌ Tesla Cybertruck
- ❌ **ANY non-Tesla vehicle (Jeep, Ford, Chevy, etc.)**
- ❌ **ANY other make or model whatsoever**

---

## Mandatory Reading Before Installation

### You MUST Read These Documents (In Order):

1. **[SAFETY_FIRST.md](SAFETY_FIRST.md)** ← **START HERE**
   - Critical safety warnings
   - Vehicle compatibility details
   - Real incident details
   - Driver responsibilities
   - System limitations

2. **[NotAutopilot_General_disclaimer.md](NotAutopilot_General_disclaimer.md)**
   - Legal disclaimers
   - Liability information
   - Risk acknowledgment
   - Terms of use

3. **[Hardware_Compatibility.md](Hardware_Compatibility.md)**
   - Supported hardware matrix
   - Required components
   - Purchasing guide
   - Cost estimates

4. **[Project_History.md](Project_History.md)**
   - Project lineage and philosophy
   - What's included/removed
   - Comparison with tinkla

### Only After Reading All Above:

5. **[OpenPilot_for_preAP_Tesla_ModelS.md](OpenPilot_for_preAP_Tesla_ModelS.md)**
   - Installation guide
   - Step-by-step instructions
   - Configuration setup

---

## What is NotAutopilot?

NotAutopilot is an **openpilot fork** designed exclusively for **Pre-Autopilot Tesla Model S vehicles (2012-2014)**.

### Key Information

- **Base**: openpilot 0.10.2
- **Lineage**: tinkla (boggyver) → xnor (Lukas Loetkolben) → NotAutopilot
- **Vehicle**: Pre-AP Tesla Model S ONLY
- **Status**: BETA (research/development only)
- **License**: MIT (inherited from openpilot)

### What It Provides

✅ **Adaptive Cruise Control (ACC)** - Speed and following distance
✅ **Lane Keep Assist (LKA)** - Centered in lane
✅ **Forward Collision Warning (FCW)** - Collision alerts
✅ **Lane Departure Warning (LDW)** - Lane drift alerts
✅ **Driver Monitoring (DM)** - Attention monitoring

### Optional Enhancements

✅ **Pedal Interceptor** (Recommended) - 0-18 MPH speed control
✅ **Tesla Bosch Radar** (Recommended) - Enhanced lead car detection

### NOT Included (Removed)

❌ Instrument Cluster (IC) integration - Removed
❌ Tinkla Buddy device - Not supported
❌ iBooster brake control - Not supported
❌ AP1/AP2 vehicle support - Removed
❌ Multi-vehicle configuration - Pre-AP only

---

## Critical Limitations

### ⚠️ Braking Limitations ⚠️

**This system uses REGENERATIVE BRAKING ONLY:**

- **WITHOUT Pedal**: Works only above 18 MPH
- **WITH Pedal**: Works only 5-18 MPH
- **Below 5 MPH**: NO automatic braking

### **YOU MUST BE READY TO BRAKE MANUALLY AT ALL TIMES**

**Regenerative braking is NOT sufficient for:**
- Emergency stops
- Sudden slowdowns
- Unexpected obstacles
- Steep grades
- Icy/wet conditions

### This is BETA Software

- ⚠️ Requires **full driver attention** at ALL times
- ⚠️ Research/development purposes ONLY
- ⚠️ NOT a production product
- ⚠️ You are **responsible** for safe operation
- ⚠️ Can have bugs, errors, or unexpected behavior
- ⚠️ May disengage without warning

---

## Quick Links

### Essential Documentation

- **[SAFETY_FIRST.md](SAFETY_FIRST.md)** - Critical safety warnings (START HERE)
- **[Welcome_to_NotAutopilot.md](Welcome_to_NotAutopilot.md)** - Project overview
- **[Main_Page.md](Main_Page.md)** - Main documentation hub

### Installation & Setup

- **[OpenPilot_for_preAP_Tesla_ModelS.md](OpenPilot_for_preAP_Tesla_ModelS.md)** - Installation guide
- **[Hardware_Compatibility.md](Hardware_Compatibility.md)** - Hardware requirements
- **[Tesla_Unity_Configuration.md](Tesla_Unity_Configuration.md)** - Configuration guide

### Optional Peripherals

- **[Pedal_Interceptor.md](Pedal_Interceptor.md)** - Pedal installation guide
- **[Tesla_Bosch_Radar.md](Tesla_Bosch_Radar.md)** - Radar installation guide

### Legal & Background

- **[NotAutopilot_General_disclaimer.md](NotAutopilot_General_disclaimer.md)** - Legal disclaimers
- **[Project_History.md](Project_History.md)** - Project lineage

---

## Supported Hardware

### Comma Devices

| Device | Status | Notes |
|--------|--------|-------|
| **Comma 3** | ✅ **Supported** | Fully tested |
| **Comma 3X (C3X)** | ✅ **Supported** | Fully tested |
| **Comma 4** | ⚠️ **Untested** | Use at own risk |
| Comma Two | ❌ Not Supported | Use C3/C3X |
| EON Gold/EON | ❌ Not Supported | Use C3/C3X |

### Required Components

1. Comma 3 or C3X device (~$1,250)
2. Black Panda (included with Comma)
3. Tinkla OBD-C Adapter (~$100-200)
4. EPAS harness (~$50-100)
5. USB-C extension cable (~$20-30)

**Minimum Cost**: ~$1,420-1,580

### Optional Peripherals

**Pedal Interceptor** (~$185-235 additional)
- Enables 0-18 MPH control
- Smooth acceleration
- Essential for stop-and-go

**Tesla Bosch Radar** (~$500-800 additional)
- Enhanced lead car detection
- Better ACC performance
- All-weather capability

**[→ Complete hardware guide](Hardware_Compatibility.md)**

---

## Pre-Installation Checklist

### Before You Begin, Verify:

- [ ] I have a **Pre-Autopilot Tesla Model S (2012-2014)**
- [ ] I have verified my vehicle does **NOT** have Autopilot hardware
- [ ] I have read **[SAFETY_FIRST.md](SAFETY_FIRST.md)** completely
- [ ] I have read **[NotAutopilot_General_disclaimer.md](NotAutopilot_General_disclaimer.md)**
- [ ] I understand this is **BETA software**
- [ ] I accept **ALL risks and responsibilities**
- [ ] I have compatible hardware (Comma 3 or C3X)
- [ ] I understand I must **brake manually** at all times
- [ ] I will maintain **full driver attention**

### All Boxes Checked?

**→ [Proceed to Installation Guide](OpenPilot_for_preAP_Tesla_ModelS.md)**

### Have ANY Doubts?

**DO NOT INSTALL**

Review documentation, verify vehicle compatibility, and ensure you fully understand the risks.

---

## Important Disclaimers

### Legal Disclaimer

**Modifying your car can result in damage, injury, or death. Do not modify your car unless you understand and accept those risks. You alone are ultimately responsible.**

**THIS IS BETA QUALITY SOFTWARE FOR RESEARCH PURPOSES ONLY. THIS IS NOT A PRODUCT. YOU ARE RESPONSIBLE FOR COMPLYING WITH LOCAL LAWS AND REGULATIONS. NO WARRANTY EXPRESSED OR IMPLIED.**

**[→ Full legal disclaimer](NotAutopilot_General_disclaimer.md)**

### Liability

By using NotAutopilot, you:
- Accept full responsibility and liability
- Agree not to hold developers liable
- Acknowledge all risks and limitations
- Confirm you will maintain full driver attention

---

## Project Information

### Credits & Acknowledgments

NotAutopilot builds on the work of:
- **boggyver** - Original tinkla creator, Tesla integration pioneer
- **Lukas Loetkolben** - xnor fork maintainer
- **comma.ai** - openpilot creators
- **Tesla community** - Testing and support

### What Makes NotAutopilot Different?

**Focused Approach:**
- Pre-AP Model S ONLY (no multi-vehicle complexity)
- Safety-first documentation
- Clear feature boundaries
- Removed unsupported features (IC, Buddy, iBooster)

**Inherited from Tinkla:**
- EPAS control and patching
- Pedal Interceptor integration
- Tesla Bosch Radar integration
- Tesla Unity configuration system
- Proven Pre-AP support

**[→ Complete project history](Project_History.md)**

---

## Need Help?

### Documentation Structure

```
NotAutopilot Documentation
├── README.md (you are here)
├── SAFETY_FIRST.md (MANDATORY - read first)
├── Welcome_to_NotAutopilot.md (project overview)
├── Main_Page.md (main hub)
│
├── Installation & Setup
│   ├── OpenPilot_for_preAP_Tesla_ModelS.md
│   ├── Hardware_Compatibility.md
│   └── Tesla_Unity_Configuration.md
│
├── Optional Peripherals
│   ├── Pedal_Interceptor.md
│   └── Tesla_Bosch_Radar.md
│
├── Technical Documentation
│   ├── Tesla_CAN_Bus.md
│   ├── EPAS_harness.md
│   ├── The_Panda.md
│   └── Tinkla_OBD-C_Adapter.md
│
└── Legal & Background
    ├── NotAutopilot_General_disclaimer.md
    └── Project_History.md
```

### Where to Start

1. **New users**: Start with [SAFETY_FIRST.md](SAFETY_FIRST.md)
2. **Planning installation**: See [Hardware_Compatibility.md](Hardware_Compatibility.md)
3. **Ready to install**: Follow [OpenPilot_for_preAP_Tesla_ModelS.md](OpenPilot_for_preAP_Tesla_ModelS.md)
4. **Need configuration help**: See [Tesla_Unity_Configuration.md](Tesla_Unity_Configuration.md)
5. **Want peripherals**: Check [Pedal_Interceptor.md](Pedal_Interceptor.md) or [Tesla_Bosch_Radar.md](Tesla_Bosch_Radar.md)

---

## Final Warning

### Before You Proceed

This software:
- Interfaces with critical vehicle systems
- Can cause permanent vehicle damage if misused
- Requires full driver attention when active
- Has NO WARRANTY of any kind
- Makes YOU fully responsible for all consequences

**If you have ANY uncertainty about:**
- Vehicle compatibility
- Technical capability
- Risk acceptance
- Legal implications

### **DO NOT INSTALL**

---

## Ready to Begin?

### Start Here:

**→ [SAFETY_FIRST.md - Critical Safety Warnings](SAFETY_FIRST.md)**

---

*Drive safely. Stay alert. Take responsibility.*

**This is experimental software. You are responsible for your vehicle's safe operation at all times.**

---

*Last Updated: 2025-12-03*
*Project: NotAutopilot*
*Base: openpilot 0.10.2*
*License: MIT*
