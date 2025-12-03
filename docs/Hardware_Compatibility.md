# Hardware Compatibility Matrix

## Overview

NotAutopilot is based on openpilot 0.10.2 and has specific hardware requirements. This page documents all compatible and incompatible hardware to help you make informed purchasing decisions.

**Important**: Using incompatible hardware may result in system malfunction or installation failure.

---

## Comma Devices

### Supported Devices

| Device | Status | Notes |
|--------|--------|-------|
| **Comma 3** | ✅ **Fully Supported** | Recommended device. Fully tested and confirmed working with NotAutopilot. |
| **Comma 3X (C3X)** | ✅ **Fully Supported** | Recommended device. Fully tested and confirmed working with NotAutopilot. |
| **Comma 4** | ⚠️ **Untested** | Comma 4 hardware has NOT been tested with NotAutopilot. Use at your own risk. May or may not work. |

### NOT Supported Devices

| Device | Status | Reason |
|--------|--------|--------|
| **Comma Two** | ❌ **Not Supported** | Based on older hardware generation. Use Comma 3 or C3X instead. |
| **EON Gold** | ❌ **Not Supported** | Legacy hardware from openpilot 0.7.x era. Not compatible with openpilot 0.10.2 codebase. |
| **EON (any variant)** | ❌ **Not Supported** | Legacy hardware. Not compatible with current software. |

### Where to Purchase

- **Comma 3**: Available at [comma.ai/shop](https://comma.ai/shop/products/three)
- **Comma 3X (C3X)**: Available at [comma.ai/shop](https://comma.ai/shop/products/comma-3x)

---

## Required Hardware

These components are **required** for basic NotAutopilot installation:

### Core Components

| Component | Description | Required | Purchase Link |
|-----------|-------------|----------|---------------|
| **Comma 3 or C3X** | Main compute device | ✅ Yes | [comma.ai](https://comma.ai/shop) |
| **Black Panda** | CAN bus interface | ✅ Yes | Included with Comma devices |
| **Tinkla OBD-C Adapter** | Vehicle connection adapter | ✅ Yes | [Tinkla Store](https://shop.tinkla.us/) |
| **EPAS Harness** | Steering control harness | ✅ Yes | See EPAS documentation |
| **USB-C Cable** | Device power/connection | ✅ Yes | Included with Comma device |
| **USB-C Extension** | Extended cable for routing | ✅ Recommended | [Approved extension](https://shop.tinkla.us/USB4-2m-Extension-Cable-For-Comma-Two-Three-p467071951) |

### Installation Hardware

| Item | Purpose | Notes |
|------|---------|-------|
| **Windshield Mount** | Mount Comma device | Included with Comma device |
| **USB Power** | Power for device | Use vehicle USB or 12V adapter |

---

## Recommended Peripherals

These components are **optional but highly recommended** for enhanced functionality:

### Pedal Interceptor (Highly Recommended)

**Purpose**: Enables adaptive cruise control from 0-18 MPH using regenerative braking.

| Component | Description | Required | Purchase Link |
|-----------|-------------|----------|---------------|
| **Tinkla Pedal Interceptor** | Main pedal board | ✅ Yes (for pedal) | [Tinkla Store](https://shop.tinkla.us/Tinkla-Pedal-p487274387) |
| **Tesla Pedal Connectors** | Connector pair for pedal wiring | ✅ Yes (for pedal) | [Tinkla Store](https://shop.tinkla.us/Tesla-Pedal-Connectors-pair-p459771917) |
| **Ethernet Cable** | CAN bus connection (2ft) | ✅ Yes (for pedal) | Standard ethernet (non-crossover) |
| **Enclosure Box** | Protective housing | ⚠️ Optional | May come with pedal |

**Benefits:**
- Full adaptive cruise control down to 1 MPH
- Smooth acceleration control via openpilot
- Multiple pedal profiles (4 profiles available)
- Universal calibration tool included
- Essential for stop-and-go traffic capability

**Limitations:**
- Regenerative braking only works above 5 MPH
- Below 5 MPH: no automatic braking
- Still requires driver readiness to brake manually

**Installation Difficulty**: Moderate (requires pedal access and wiring)

---

### Tesla Bosch Radar (Recommended)

**Purpose**: Significantly improves lead vehicle detection for better adaptive cruise control.

| Component | Description | Required | Purchase Link |
|-----------|-------------|----------|---------------|
| **Tesla Bosch Radar** | MRRevo14 radar unit | ✅ Yes (for radar) | [Tinkla Store](https://shop.tinkla.us/Tinkla-Radar-for-use-with-OpenPilot-on-PreAP-Tesla-Model-S-p521235662) |
| **Radar Mounting Bracket** | Adjustable mount (behind nosecone) | ✅ Yes (for radar) | [Tinkla Store](https://shop.tinkla.us/Tinkla-Radar-Bracket-for-Tesla-Model-S-Behind-Nosecone-p521235665) |
| **Radar Harness** | Wiring harness for radar | ✅ Yes (for radar) | [Tinkla Store](https://shop.tinkla.us/Tinkla-Radar-Harness-p514922906) |

**Radar Specifications:**
- **Model**: Bosch MRRevo14
- **Part Numbers**: 1038224-00-A/B, 1057551-00-B
- **Range**: ~160 meters (525 feet)
- **Field of View**: 45° cone (short beam)
- **Object Detection**: Up to 32 objects simultaneously
- **Data**: Raw radar data processing by openpilot

**Benefits:**
- More accurate lead car detection vs vision-only
- Improved adaptive cruise control response
- Better performance in poor visibility conditions
- Works in conjunction with camera vision
- Can detect cars in adjacent lanes

**Installation Requirements:**
- Nose cone removal
- Frunk disassembly (for ground connection)
- Cable routing from front to cabin
- VIN learning process (via UI)
- Radar calibration procedure

**Installation Difficulty**: Advanced (requires significant disassembly)

---

## NOT Supported / NOT Included

These features and hardware are **NOT supported** in NotAutopilot:

### ❌ Instrument Cluster (IC) Integration

**Status**: NOT Supported

- No dashboard display integration
- No visualization of openpilot data on instrument cluster
- Tinkla Buddy device NOT supported
- All IC integration features removed from NotAutopilot

**Why**: NotAutopilot focuses exclusively on core driving assistance features for Pre-AP Model S. IC integration adds complexity and is not included in this fork.

### ❌ Tinkla Buddy Device

**Status**: NOT Supported

- Tinkla Buddy hardware NOT compatible
- All Buddy-related software features removed
- No in-car WiFi access point from Buddy
- No relay control features
- No remote access via Buddy

**Alternative**: Use standard SSH access to Comma device for configuration and debugging.

### ❌ iBooster Brake Integration

**Status**: NOT Supported

- Hydraulic brake control NOT included
- Full stop-and-go (below 5 MPH with braking) NOT available
- iBooster ECU integration code removed

**Why**: iBooster integration requires significant mechanical modification (brake system replacement from newer Tesla) and was experimental in tinkla. NotAutopilot focuses on proven, stable features.

**Impact**: System limited to regenerative braking only. Driver must be ready to brake manually at all times.

---

## Compatibility Summary Tables

### Vehicle Compatibility

| Vehicle | Compatible |
|---------|------------|
| Tesla Model S (2012-2014, Pre-AP) | ✅ YES |
| Tesla Model S with AP1 | ❌ NO |
| Tesla Model S with AP2+ | ❌ NO |
| Tesla Model X (any) | ❌ NO |
| Tesla Model 3/Y | ❌ NO |
| Any non-Tesla vehicle | ❌ NO |

### Comma Device Compatibility

| Device | Compatible | Notes |
|--------|------------|-------|
| Comma 3 | ✅ YES | Fully tested |
| Comma 3X (C3X) | ✅ YES | Fully tested |
| Comma 4 | ⚠️ UNTESTED | Use at own risk |
| Comma Two | ❌ NO | Use C3/C3X |
| EON Gold | ❌ NO | Use C3/C3X |

### Peripheral Compatibility

| Peripheral | Supported | Included in NotAutopilot |
|------------|-----------|--------------------------|
| Pedal Interceptor | ✅ YES | ✅ Included |
| Tesla Bosch Radar | ✅ YES | ✅ Included |
| Instrument Cluster | ❌ NO | ❌ Removed |
| Tinkla Buddy | ❌ NO | ❌ Removed |
| iBooster Brakes | ❌ NO | ❌ Removed |

---

## Purchasing Guide

### Minimum Installation (Basic Functionality)

**Required Components:**
1. Comma 3 or C3X device (~$1,250)
2. Black Panda (included with Comma device)
3. Tinkla OBD-C Adapter (~$100-200)
4. EPAS harness (~$50-100)
5. USB-C extension cable (~$20-30)

**Total Estimated Cost**: ~$1,420-1,580

**Capabilities:**
- Lane keeping assist (LKA)
- Adaptive cruise control above 18 MPH (regen braking only)
- Forward collision warning
- Lane departure warning
- Driver monitoring

**Limitations:**
- No speed control below 18 MPH
- Regen braking only (not sufficient for emergency stops)
- Vision-only lead car detection

---

### Recommended Installation (Enhanced Functionality)

**Add to Minimum:**
1. Tinkla Pedal Interceptor (~$150-200)
2. Tesla Pedal Connectors (~$30)
3. Ethernet cable (~$5)

**Additional Total**: ~$185-235
**Grand Total**: ~$1,605-1,815

**Additional Capabilities:**
- Adaptive cruise control down to 1 MPH
- Smooth acceleration control
- Better stop-and-go performance (above 5 MPH)
- Multiple acceleration profiles

**Still Limited By:**
- Regen braking only
- No braking below 5 MPH
- Driver must be ready to brake manually

---

### Maximum Installation (Best Performance)

**Add to Recommended:**
1. Tesla Bosch Radar unit (~$300-500, used on eBay)
2. Radar mounting bracket (~$100-150)
3. Radar harness (~$100-150)

**Additional Total**: ~$500-800
**Grand Total**: ~$2,105-2,615

**Additional Capabilities:**
- Significantly improved lead car detection
- Better adaptive cruise control response
- Raw radar data for enhanced longitudinal control
- Multi-object tracking (32 objects)
- Better performance in poor visibility

**Installation Note**: Radar installation is complex and time-consuming. Professional installation recommended if not comfortable with extensive vehicle disassembly.

---

## DIY vs Professional Installation

### DIY Installation Considerations

**You can DIY if you:**
- Have automotive electrical experience
- Can read and follow wiring diagrams carefully
- Have basic hand tools and crimping tools
- Are comfortable working with vehicle electronics
- Can access vehicle service information
- Have patience for troubleshooting

**Consider professional help for:**
- EPAS harness installation (steering system)
- Pedal interceptor wiring (throttle system)
- Radar installation (complex disassembly)

### Professional Installation

**Benefits:**
- Reduced risk of wiring errors
- Professional-grade connections
- Warranty on installation work
- Faster installation time
- Troubleshooting expertise

**Estimated Costs:**
- Basic installation: $200-500
- With pedal: $500-800
- With radar: $800-1,200

---

## Upgrade Path

You can install NotAutopilot incrementally:

### Phase 1: Basic Installation
1. Install Comma device + OBD-C adapter
2. Test lane keeping and basic ACC
3. Evaluate system performance

### Phase 2: Add Pedal (Recommended)
1. Install pedal interceptor
2. Configure and calibrate via UI
3. Gain 0-18 MPH control capability

### Phase 3: Add Radar (Optional)
1. Install radar unit and harness
2. Perform VIN learning
3. Calibrate radar alignment
4. Enjoy enhanced lead car detection

**This incremental approach allows you to:**
- Spread out costs over time
- Learn the system before adding complexity
- Validate each component individually
- Reduce installation overwhelm

---

## Important Notes

### Hardware Purchasing Tips

1. **Buy from reputable sources** - Avoid counterfeit or incompatible parts
2. **Verify part numbers** - Especially for radar units (many variants exist)
3. **Check used radar condition** - Ensure not damaged or heavily weathered
4. **Use approved cables** - Undersized wiring can create fire hazards
5. **Keep documentation** - Save receipts and part numbers for reference

### Installation Safety

1. **Disconnect 12V battery** - Before any electrical work
2. **Use proper tools** - Especially crimpers for connectors
3. **Follow torque specs** - For mechanical installations
4. **Test thoroughly** - Before driving on public roads
5. **Have backup plan** - Know how to quickly disconnect system if needed

### Support Resources

- **Installation Guides**: See individual component documentation
- **Wiring Diagrams**: See EPAS harness, pedal, and radar pages
- **Configuration**: See Tesla Unity Configuration guide
- **Troubleshooting**: See component-specific troubleshooting sections

---

## Questions?

**Before purchasing:**
1. Read the [SAFETY_FIRST](SAFETY_FIRST.md) document
2. Verify your vehicle is a Pre-AP Tesla Model S
3. Assess your technical skill level honestly
4. Calculate total costs including installation
5. Understand the limitations of the system

**Vehicle compatibility questions?**
→ See [SAFETY_FIRST](SAFETY_FIRST.md) for critical vehicle compatibility information.

**Installation questions?**
→ See individual component installation guides.

**Feature questions?**
→ See [OpenPilot for preAP Tesla ModelS](OpenPilot_for_preAP_Tesla_ModelS.md) for feature overview.

---

*Last Updated: 2025-12-03*
*Compatible with: NotAutopilot (based on openpilot 0.10.2)*
