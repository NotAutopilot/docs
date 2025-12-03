# SAFETY FIRST - READ THIS BEFORE INSTALLATION

## ⚠️ CRITICAL WARNINGS ⚠️

### 1. Vehicle Compatibility - READ CAREFULLY

**THIS SYSTEM WORKS ONLY ON:**
- Tesla Model S (2012-2014)
- Pre-Autopilot (no AP hardware)
- EPAS (Electric Power Assisted Steering) system

**DO NOT USE ON ANY OTHER VEHICLE**

### 🚨 REAL INCIDENT: VEHICLE BRICKING 🚨

**A user attempted to install this system on a Jeep and permanently bricked the vehicle.**

The vehicle became inoperable and required expensive professional intervention. This software interfaces directly with critical vehicle control systems at a low level and is specifically designed for the Pre-Autopilot Tesla Model S CAN bus architecture.

**Using this software on ANY other vehicle WILL result in:**
- Permanent damage to vehicle control systems
- Loss of critical safety features (steering, braking, traction control)
- Complete vehicle bricking (inoperable state)
- Expensive repair or replacement costs
- Potential safety hazards and liability

### Compatible Vehicle (ONLY)

✅ **Tesla Model S (2012-2014) WITHOUT Autopilot Hardware**
- Specifically: Pre-Autopilot Model S with EPAS steering
- Check your vehicle's production date and configuration
- If unsure, DO NOT proceed with installation

### NOT Compatible With (WILL DAMAGE VEHICLE)

❌ **Tesla Model S with AP1** (Autopilot Hardware 1.0, 2014-2016)
❌ **Tesla Model S with AP2/AP2.5/AP3** (2016+)
❌ **Tesla Model X** (any year, any variant)
❌ **Tesla Model 3** (any year, any variant)
❌ **Tesla Model Y** (any year, any variant)
❌ **Tesla Cybertruck**
❌ **ANY non-Tesla vehicle** (ANY make, ANY model)
❌ **ANY other vehicle whatsoever**

**If your vehicle is not explicitly listed in the "Compatible" section above, DO NOT INSTALL.**

---

## 2. Driver Responsibility

### This is BETA Software

- **Not production-ready**: This is experimental software for research and development
- **Full attention required**: You MUST maintain complete focus on driving at all times
- **You are responsible**: You alone are responsible for the safe operation of your vehicle
- **Be ready to take over**: You must be prepared to manually control steering and braking at any moment
- **No autonomous driving**: This is a driver assistance system, NOT an autonomous driving system

### Legal Requirements

- You are responsible for complying with all local laws and regulations
- Some jurisdictions may prohibit or restrict driver assistance modifications
- Using this system does not exempt you from traffic laws
- You assume all liability for the use of this system

---

## 3. Braking Limitations - CRITICAL SAFETY INFORMATION

### WITHOUT Pedal Interceptor (Basic Installation)

⚠️ **SEVERE LIMITATIONS:**
- **Only regenerative braking** available for adaptive cruise control
- **Works only above 18 MPH** (29 km/h)
- **NOT sufficient for emergency stops** or sudden slowdowns
- **YOU MUST BE READY TO BRAKE MANUALLY AT ALL TIMES**

**This configuration is NOT recommended for stop-and-go traffic or urban driving.**

### WITH Pedal Interceptor (Recommended)

⚠️ **IMPORTANT LIMITATIONS:**
- Regenerative braking works **5-18 MPH** (8-29 km/h)
- Works down to **1 MPH** for speed control
- **Below 5 MPH: NO automatic braking capability**
- **YOU MUST STILL BE READY TO BRAKE MANUALLY AT ALL TIMES**

**Even with the Pedal Interceptor:**
- Regenerative braking has physical limitations
- Not sufficient for all emergency situations
- May be reduced in cold weather or with low battery
- Manual braking is always your responsibility

### Why This Matters

Without iBooster (hydraulic brake integration), this system can only use your Tesla's regenerative braking for speed control. Regenerative braking alone is NOT sufficient for:
- Emergency stops
- Sudden slowdowns for obstacles
- Unexpected traffic situations
- Steep downhill grades
- Wet or icy conditions

**Always maintain full awareness and be ready to use your brake pedal.**

---

## 4. Hardware Requirements

### Supported Hardware (ONLY)

✅ **Comma 3** - Fully tested and supported
✅ **Comma 3X (C3X)** - Fully tested and supported
⚠️ **Comma 4** - Untested, use at your own risk

### NOT Supported (DO NOT USE)

❌ **Comma Two** - Not compatible with NotAutopilot
❌ **EON Gold** - Not compatible with NotAutopilot
❌ **EON (any variant)** - Not compatible with NotAutopilot

### Required Components

- Comma 3 or Comma 3X device
- Black Panda (included with Comma devices)
- Tinkla OBD-C Adapter
- EPAS harness
- USB-C cable and approved extension

### Installation Requirements

- **Follow wiring diagrams exactly** - No improvisation
- **Double-check all connections** - Incorrect wiring can damage vehicle
- **Use correct wire gauges** - Undersized wiring creates fire hazard
- **Professional installation recommended** - Especially for pedal and radar

---

## 5. System Limitations

### Environmental Factors

- **Camera performance**: Requires clear windshield, affected by rain/snow/fog
- **Radar performance**: Can be affected by heavy snow, ice buildup, or dirt
- **Temperature**: Extreme cold or heat may affect system performance
- **Lighting**: Low light and direct sunlight can impact camera recognition

### Driving Conditions

- **Complex intersections**: System not designed for complex navigation
- **Construction zones**: May not recognize temporary road configurations
- **Unpaved roads**: Designed for paved highway/road use only
- **Sharp curves**: May have reduced performance on very tight turns

### Known Limitations

- Not designed for city driving with frequent stops
- May not recognize all obstacles or vehicles
- Lane keeping requires clear lane markings
- Adaptive cruise requires clear road ahead
- Weather conditions significantly impact capability

**This is NOT a substitute for attentive, engaged driving.**

---

## 6. What This System Does (and Doesn't Do)

### Included Features

✅ **Adaptive Cruise Control (ACC)** - Maintains speed and following distance
✅ **Automated Lane Centering (ALC)** - Keeps vehicle centered in lane
✅ **Forward Collision Warning (FCW)** - Alerts you to potential collisions
✅ **Lane Departure Warning (LDW)** - Alerts you when drifting from lane
✅ **Driver Monitoring (DM)** - Alerts if you become distracted or drowsy

### Optional Peripherals (Recommended)

✅ **Pedal Interceptor** - Enables 0-18 MPH speed control
✅ **Tesla Bosch Radar** - Improves lead vehicle detection

### NOT Included / NOT Supported

❌ **Instrument Cluster (IC) Integration** - No dashboard display integration
❌ **Tinkla Buddy** - Not supported in NotAutopilot
❌ **iBooster Integration** - Hydraulic brake control not available
❌ **Automatic Emergency Braking (AEB)** - Not included
❌ **Autonomous Navigation** - This is NOT self-driving
❌ **Automatic Lane Changes** - Manual control required

---

## 7. Before You Start - Mandatory Checklist

### Verify Vehicle Compatibility

- [ ] I have verified my vehicle is a Pre-Autopilot Tesla Model S (2012-2014)
- [ ] I have confirmed my vehicle does NOT have Autopilot hardware
- [ ] I have verified my vehicle has an EPAS steering system
- [ ] I understand this will NOT work on any other vehicle

### Understand Risks and Responsibilities

- [ ] I have read and understood all safety warnings
- [ ] I understand this is BETA software with limitations
- [ ] I accept full responsibility for vehicle operation and safety
- [ ] I understand I must maintain full attention while driving
- [ ] I am prepared to manually brake and steer at all times
- [ ] I understand the braking limitations of this system

### Hardware and Installation

- [ ] I have compatible hardware (Comma 3 or C3X)
- [ ] I have read all installation documentation
- [ ] I understand incorrect installation can damage my vehicle
- [ ] I am comfortable with automotive electrical work OR will hire a professional

### Legal and Liability

- [ ] I have checked local laws regarding vehicle modifications
- [ ] I understand I assume all liability for using this system
- [ ] I have read and accepted the license terms and disclaimers
- [ ] I understand there is NO WARRANTY, express or implied

---

## If You Have ANY Doubts

### DO NOT INSTALL THIS SYSTEM

This software interfaces with critical vehicle systems including:
- Steering control
- Throttle/acceleration control
- Regenerative braking
- Vehicle communication networks

**Incorrect installation or use on incompatible vehicles can result in:**
- Loss of steering control → Crash
- Loss of braking → Crash
- Unintended acceleration → Crash
- Vehicle damage → Expensive repairs
- Injury or death → Irreversible consequences

---

## Still Have Questions?

### Before Installation

1. **Verify vehicle compatibility** - Triple-check your vehicle year and configuration
2. **Read ALL documentation** - Don't skip steps or assume anything
3. **Understand the risks** - This is experimental software
4. **Assess your skills** - Be honest about your technical capabilities
5. **Consider professional installation** - Especially for complex components

### Resources

- Hardware Compatibility Matrix: `Hardware_Compatibility.md`
- Project Background: `Project_History.md`
- General Disclaimer: `NotAutopilot_General_disclaimer.md`
- Installation Guide: `OpenPilot_for_preAP_Tesla_ModelS.md`

---

## Final Warning

**YOU HAVE BEEN WARNED.**

By proceeding with installation, you acknowledge that:
- You have read, understood, and accepted all warnings and disclaimers
- You are installing this system on a compatible Pre-Autopilot Tesla Model S
- You accept full responsibility and liability for the installation and use
- You understand the risks, limitations, and your responsibilities as the driver
- You will maintain full attention and engagement while operating your vehicle

**If you are not willing to accept these terms, DO NOT INSTALL.**

---

*This is experimental software. Drive safely. Stay alert. Take responsibility.*
