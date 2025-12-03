# OpenPilot for preAP Tesla ModelS

## ⚠️ CRITICAL: This guide is ONLY for Pre-Autopilot Tesla Model S (2012-2014)

**Using this on any other vehicle WILL cause damage.**

**[→ Read SAFETY_FIRST.md before proceeding](SAFETY_FIRST.md)**

---

## Quick Start

### Required Hardware

1. **[Comma 3](https://comma.ai/shop/products/three) or [Comma 3X](https://comma.ai/shop/products/comma-3x)**  - Main compute device
2. **Black Panda** - CAN bus interface (included with Comma device)
3. **[Tinkla OBD-C Adapter](Tinkla_OBD-C_Adapter.md)** - Vehicle connection adapter
4. **EPAS Harness** - Steering control harness
5. **[Approved USB-C Extension Cable](https://shop.tinkla.us/USB4-2m-Extension-Cable-For-Comma-Two-Three-p467071951)** (2m recommended)

**[→ Complete hardware compatibility matrix](Hardware_Compatibility.md)**

---

## Installation Steps

### 1. Prepare the Tinkla OBD-C Adapter

The [Tinkla OBD-C Adapter](Tinkla_OBD-C_Adapter.md) will start your journey to driving with OpenPilot.

**Important:** Check your [car's OBD2 port](Tesla_Model_S_preAP_OBD2_port.md) for the correct pins before connecting.

### 2. Install the Comma Device in Windshield

[Install the Comma 3 or Comma 3X](Comma_devkit.md) in your windshield using the included mount.

**Mounting Tips:**
- Position behind rearview mirror for optimal camera view
- Ensure clear view of road ahead
- Check camera angle after mounting
- Verify device is secure before driving

### 3. Connect the Hardware

1. Connect your **Comma 3** or **Comma 3X** to the Tinkla OBD-C Adapter
2. Use the USB-C cable that came with your Comma device
3. Add an [approved USB-C Extension cable](https://shop.tinkla.us/USB4-2m-Extension-Cable-For-Comma-Two-Three-p467071951) for proper routing

**Connection Path:**
```
Comma Device → USB-C Extension → Tinkla OBD-C Adapter → Vehicle OBD2 Port
```

### 4. Install NotAutopilot Software

[Install the Tesla version of OpenPilot](Comma_devkit.md) on your Comma device.

**Installation Methods:**
- Flash from comma.ai installer (if available for NotAutopilot)
- Use custom installer URL for NotAutopilot
- Manual installation via SSH

**Note:** Specific NotAutopilot installation URLs and methods should be documented based on your distribution method.

### 5. Configure Tesla-Specific Settings

[Edit the Tesla specific configuration settings](Tesla_Unity_Configuration.md) using the Tesla Unity interface.

**Key Settings to Configure:**
- Vehicle type: Pre-AP Model S
- EPAS settings
- Driver monitoring preferences
- Sound settings
- Speed limit behavior
- Follow distance

### 6. Flash and Patch Components

Using the UI (no SSH required), [flash and patch](Comma_devkit.md):

1. **Panda Firmware** - Flash black panda to latest compatible version
2. **EPAS** - Patch EPAS for steering control
3. **Pedal** (if installed) - Flash pedal interceptor firmware
4. **Radar** (if installed) - Program radar with VIN learning

**All flashing is done through the Tesla Unity UI. No SSH required.**

### 7. Test Drive

Take your Tesla with NotAutopilot for a test drive!

**First Drive Checklist:**
- [ ] Start in safe, low-traffic area
- [ ] Test lane keeping on straight road
- [ ] Test adaptive cruise control
- [ ] Verify driver monitoring is working
- [ ] Test disengagement (stalk, brake, wheel)
- [ ] Verify you can take over at any time
- [ ] Be ready to brake manually

**Remember:**
- This is BETA software
- Maintain full attention at all times
- Be ready to take over steering and braking
- Do not rely solely on the system

---

## Getting Pre-AP up to Enhanced Capability

Your Pre-Autopilot Model S can be enhanced with optional peripherals:

### Out of the Box (Basic Installation)

The basic install for your Tesla provides:

**Capabilities:**
- Lane Keep Assist (LKA) with EPAS control
- Limited Adaptive Cruise Control (ACC) above 18 MPH
- Uses vision-based lead car detection
- Regenerative braking only for speed control

**Required Components:**
1. Comma 3 or C3X device
2. Tinkla OBD-C Adapter
3. EPAS harness
4. USB-C cables

**Limitations:**
- No speed control below 18 MPH (stock Tesla CC limitation)
- Regen braking only (not sufficient for emergency stops)
- Vision-only lead car detection (less accurate than radar)
- Driver MUST be ready to brake manually at all times

---

### 0 - 18 MPH Upgrade: Pedal Interceptor

**[→ Complete Pedal Interceptor Guide](Pedal_Interceptor.md)**

The [Pedal Interceptor](Pedal_Interceptor.md) is a small unit that connects between your accelerator pedal and the vehicle's drive unit.

**What It Provides:**
- Adaptive cruise control down to **1 MPH** (regen works above 5 MPH)
- Smooth acceleration control via NotAutopilot
- Better ACC performance than stock cruise control
- Multiple pedal profiles (4 profiles available)
- Universal calibration tool included

**Required Components:**
- [Tinkla Pedal Interceptor board](https://shop.tinkla.us/Tinkla-Pedal-p487274387)
- [Tesla Pedal Connectors (pair)](https://shop.tinkla.us/Tesla-Pedal-Connectors-pair-p459771917)
- Ethernet cable (2ft, non-crossover)
- Enclosure box (may be included with pedal)

**Installation Difficulty:** Moderate
- Requires access to accelerator pedal area
- Wiring between pedal and vehicle connector
- Ethernet cable to Tinkla OBD-C Adapter
- Firmware flashing via UI (easy)

**Critical Limitation:**
> Without electric brakes (iBooster), the car only uses regenerative braking. This is not enough for sudden slowdowns. **YOU MUST BE READY TO MANUALLY BRAKE AT ANY MOMENT.**

**Benefits Over Basic:**
- Stop-and-go traffic capability (above 5 MPH)
- Smooth acceleration control
- More natural feeling ACC
- Essential for urban and traffic use

---

### Tesla Radar Retrofit

**[→ Complete Tesla Bosch Radar Guide](Tesla_Bosch_Radar.md)**

[With a few more wires and a harness (plus some parts), you can add a Tesla Bosch radar](Tesla_Bosch_Radar.md) to your pre-AP car.

**What It Provides:**
- Significantly more accurate lead car detection
- Better ACC response and following behavior
- 32 object detection capability
- 160m range with 45° field of view
- Raw radar data processing by NotAutopilot
- Works in poor visibility conditions

**Required Components:**
- [Tesla Bosch Radar unit](https://shop.tinkla.us/Tinkla-Radar-for-use-with-OpenPilot-on-PreAP-Tesla-Model-S-p521235662) (MRRevo14)
- [Tinkla Radar Mounting Bracket](https://shop.tinkla.us/Tinkla-Radar-Bracket-for-Tesla-Model-S-Behind-Nosecone-p521235665)
- [Tinkla Radar Harness](https://shop.tinkla.us/Tinkla-Radar-Harness-p514922906)
- Hardware included with bracket

**Installation Difficulty:** Advanced
- Requires nose cone removal
- Frunk disassembly for ground connection
- Cable routing from front to cabin
- Radar mounting and alignment
- VIN learning process via UI
- Calibration procedure required

**Benefits Over Vision-Only:**
- Much more reliable lead car detection
- Better ACC performance
- Works in rain, fog, low light
- Detects vehicles in adjacent lanes
- Professional-grade longitudinal control

**With full radar integration now available in NotAutopilot, you get more accurate lead car detection which leads to better ACC (still limited to regen braking without iBooster).**

---

### Instrument Cluster Integration

**Status: NOT AVAILABLE in NotAutopilot**

❌ **Instrument Cluster (IC) integration has been removed from NotAutopilot.**

**Why?**
- Requires Tinkla Buddy device (not supported)
- Adds significant complexity
- Only works with MCU1 vehicles
- Focus is on core driving assistance

**What This Means:**
- No visualization of NotAutopilot data on your IC dashboard
- IC will show standard Tesla information only
- NotAutopilot status shown on Comma device screen only

**If you need IC integration:** Consider using the original [tinkla project](https://github.com/boggyver/openpilot) which includes Tinkla Buddy support.

---

### Stop-and-Go (Full Braking)

**Status: NOT AVAILABLE in NotAutopilot**

❌ **iBooster brake integration has been removed from NotAutopilot.**

**Why?**
- Requires complete brake system replacement (~$800-1000 in parts)
- Significant mechanical work (brake fluid flush, etc.)
- Was experimental status in original tinkla
- Safety-critical system modification
- Beyond scope of NotAutopilot

**What This Means:**
- System limited to regenerative braking only
- No hydraulic brake control
- No automatic braking below 5 MPH
- Driver MUST be ready to brake manually at ALL times

**Current Braking Capabilities:**
- WITHOUT Pedal: Regen braking above 18 MPH
- WITH Pedal: Regen braking 5-18 MPH
- Below 5 MPH: NO automatic braking

**If you need iBooster:** Consider using the original [tinkla project](https://github.com/boggyver/openpilot) which has experimental iBooster support.

---

## Recommended Configuration

### Minimum Installation (Basic Functionality)

**Hardware:**
- Comma 3 or C3X
- Tinkla OBD-C Adapter
- EPAS harness
- USB cables

**Capabilities:**
- Lane keeping assist
- ACC above 18 MPH (regen only)
- Forward collision warning
- Lane departure warning
- Driver monitoring

**Best For:**
- Highway driving
- Open roads with minimal traffic
- Users on a budget

**Cost:** ~$1,400-1,600

---

### Recommended Installation (Enhanced)

**Add to Minimum:**
- Pedal Interceptor
- Tesla Pedal Connectors
- Ethernet cable

**Additional Capabilities:**
- ACC down to 1 MPH
- Smooth acceleration control
- Stop-and-go traffic (above 5 MPH)
- Multiple acceleration profiles

**Best For:**
- Mixed driving conditions
- Urban and highway use
- Users who want better ACC

**Additional Cost:** ~$185-235
**Total Cost:** ~$1,605-1,815

---

### Maximum Installation (Best Performance)

**Add to Recommended:**
- Tesla Bosch Radar
- Radar mounting bracket
- Radar harness

**Additional Capabilities:**
- Professional-grade lead car detection
- Significantly better ACC
- Multi-object tracking
- All-weather performance

**Best For:**
- Users who want the best performance
- Those who drive in varied conditions
- Enthusiasts wanting full capability

**Additional Cost:** ~$500-800
**Total Cost:** ~$2,105-2,615

---

## Important Disclaimers

### This is BETA Software

- Requires full driver attention at ALL times
- Research and development purposes only
- NOT a production product
- You are responsible for safe operation

### Limitations You Must Understand

1. **Braking:** Regen only, NOT sufficient for emergency stops
2. **Weather:** Camera and radar affected by conditions
3. **Roads:** Designed for paved roads with lane markings
4. **Complexity:** Not for all intersection types or scenarios
5. **Driver:** YOU are always responsible for your vehicle

### Please Read and Understand

Before proceeding, you MUST read:

1. **[SAFETY_FIRST.md](SAFETY_FIRST.md)** - Critical safety warnings
2. **[NotAutopilot_General_disclaimer.md](NotAutopilot_General_disclaimer.md)** - Legal disclaimers
3. **[Hardware_Compatibility.md](Hardware_Compatibility.md)** - Hardware requirements

**[→ Read the Disclaimers and Licensing](NotAutopilot_General_disclaimer.md)**

---

## Next Steps

### After Basic Installation

1. **Test thoroughly** in safe conditions
2. **Learn the system** behavior and limitations
3. **Calibrate** by driving on well-marked highways
4. **Monitor** system performance and alerts
5. **Consider adding** Pedal Interceptor for enhanced capability

### Adding Peripherals

**Want to add Pedal?**
→ [Pedal Interceptor Installation Guide](Pedal_Interceptor.md)

**Want to add Radar?**
→ [Tesla Bosch Radar Installation Guide](Tesla_Bosch_Radar.md)

### Configuration

**Need to adjust settings?**
→ [Tesla Unity Configuration Guide](Tesla_Unity_Configuration.md)

---

## Support & Resources

### Documentation

- [Tesla CAN Bus](Tesla_CAN_Bus.md) - CAN architecture
- [Tesla Model S preAP OBD2 Port](Tesla_Model_S_preAP_OBD2_port.md) - Port pinout
- [EPAS Harness](EPAS_harness.md) - Steering harness details
- [The Panda](The_Panda.md) - CAN interface info
- [Tinkla OBD-C Adapter](Tinkla_OBD-C_Adapter.md) - Adapter details

### Advanced Topics

- [Longitudinal Control (ACC)](Longitudinal_Control__ACC.md) - ACC technical details
- [Cabana](Cabana.md) - CAN bus analysis tool
- [SSH Into Your Device](SSH_Into_Your_Device.md) - Device access

---

*Drive safely. Stay engaged. Take responsibility.*

**You are responsible for your vehicle's safe operation at all times.**
