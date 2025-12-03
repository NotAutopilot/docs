# NotAutopilot Project History & Lineage

## Project Overview

NotAutopilot is a focused fork of openpilot specifically designed for Pre-Autopilot Tesla Model S vehicles (2012-2014). This document explains the project's lineage, philosophy, and technical foundation.

---

## Fork Lineage

### Original Project: boggyver's Tesla Integration

**Creator**: boggyver
**Repository**: [boggyver/openpilot](https://github.com/boggyver/openpilot)

**Key Contributions:**
- Pioneered Pre-Autopilot Tesla Model S integration with openpilot
- Developed comprehensive Tesla support across multiple hardware generations
- Created Tinkla Buddy for Instrument Cluster integration
- Built Tesla Unity configuration system
- Integrated Pedal Interceptor support
- Integrated Tesla Bosch Radar support
- Developed EPAS patching and control methods

**Supported Vehicles:**
- Pre-Autopilot Tesla Model S
- Tesla Model S/X with AP1 (Autopilot Hardware 1.0)
- Tesla Model S/X with AP2/AP2.5 (Autopilot Hardware 2.x)

**Key Features:**
- Multi-vehicle support (Pre-AP, AP1, AP2)
- Instrument Cluster integration via Tinkla Buddy
- Pedal Interceptor for longitudinal control
- Tesla Bosch Radar integration
- iBooster brake integration (experimental)
- UI-based configuration and flashing

**Impact**: boggyver's work made openpilot accessible to the entire Tesla community, including older Pre-AP vehicles that were originally not supported by comma.ai's openpilot.

---

### Intermediate Fork: xnor (by Lukas Loetkolben)

**Creator**: Lukas Loetkolben
**Lineage**: Fork of boggyver/openpilot

**Purpose**: Maintained and refined Tesla integration for openpilot

**Maintained Features**:
- Core Tesla support
- Pre-AP Model S compatibility
- Essential peripherals (Pedal, Radar)

---

### Current Project: NotAutopilot

**Lineage**: Fork of xnor → Fork of boggyver
**Openpilot Base**: Version 0.10.2
**Focus**: Pre-Autopilot Tesla Model S ONLY

**Key Changes:**

#### Additions
- Prominent safety warnings to prevent cross-vehicle installation
- Clear hardware compatibility documentation
- Streamlined documentation for single vehicle platform
- Enhanced safety messaging throughout

#### Removals
- ❌ Tesla Model S/X with AP1 support
- ❌ Tesla Model S/X with AP2/AP2.5 support
- ❌ Instrument Cluster (IC) integration
- ❌ Tinkla Buddy device support
- ❌ iBooster brake integration
- ❌ Multi-vehicle configuration options
- ❌ AP-specific features and toggles

#### Retained Core Features
- ✅ Pre-Autopilot Tesla Model S support
- ✅ Pedal Interceptor integration
- ✅ Tesla Bosch Radar integration
- ✅ Tesla Unity configuration system
- ✅ EPAS control and patching
- ✅ Core openpilot features (ACC, LKA, FCW, LDW, DM)
- ✅ UI-based device and peripheral flashing

---

## Philosophy & Design Principles

### Focus on Single Platform

**Why Pre-AP Model S Only?**

1. **Reduced Complexity**: Supporting a single vehicle platform allows for:
   - More focused development and testing
   - Clearer documentation
   - Fewer edge cases and configurations
   - Simpler maintenance

2. **Safety First**: Clear vehicle boundaries prevent:
   - Accidental installation on incompatible vehicles
   - Cross-vehicle configuration errors
   - Damage to vehicles outside the supported platform
   - User confusion about compatibility

3. **Community Heritage**: The Pre-AP Model S was where boggyver's pioneering Tesla integration began. NotAutopilot honors this heritage by maintaining exceptional support for this specific platform.

### Removed Features Rationale

#### Why Remove IC Integration & Tinkla Buddy?

- **Complexity**: IC integration added significant code complexity
- **Hardware Dependency**: Required additional Tinkla Buddy hardware purchase
- **Maintenance Burden**: Complex interaction with Tesla's MCU firmware
- **Focus**: Core driving assistance is more important than dashboard visualization
- **MCU2 Limitation**: Tinkla Buddy only worked with MCU1 vehicles, limiting applicability

**Decision**: Remove to focus on core driving assistance functionality.

#### Why Remove AP1/AP2 Support?

- **Different Architecture**: AP1/AP2 vehicles have fundamentally different CAN bus structures
- **Different Hardware**: AP vehicles have different steering and braking systems
- **Code Branching**: Multi-vehicle support creates extensive code branching
- **Testing Complexity**: Each vehicle variant requires separate testing
- **Documentation Overhead**: Multi-vehicle docs are confusing and harder to maintain

**Decision**: Single-platform focus provides better experience for Pre-AP users.

#### Why Remove iBooster Integration?

- **Experimental Status**: iBooster integration was marked as "in development" in tinkla
- **Mechanical Complexity**: Requires complete brake system replacement (~$1000 in parts)
- **Safety Critical**: Brake system modifications are safety-critical
- **Incomplete**: Not fully stable or tested in original tinkla codebase
- **Scope**: Beyond the scope of NotAutopilot's core mission

**Decision**: Focus on proven, stable features. Users wanting iBooster should use boggyver's original implementation.

---

## Technical Foundation

### Openpilot Base Version

**Version**: 0.10.2

**Why 0.10.2?**
- Proven stable release for Tesla vehicles
- Compatible with Comma 3 and C3X hardware
- Well-tested codebase
- Balance of features and stability
- Good community support and documentation

**Trade-offs**:
- Not the absolute latest openpilot version
- Missing some newer openpilot features
- Focused on stability over bleeding-edge features

### Hardware Era

**Comma Device Generation**: Comma 3 / C3X
**Panda Version**: Black Panda
**EON Devices**: Not supported (legacy hardware)

**Why This Hardware Generation?**
- Widely available and well-supported
- Proven compatibility with Tesla vehicles
- Good performance for vision and control tasks
- Active support from comma.ai
- Clear upgrade path from older hardware

---

## What NotAutopilot Is (and Isn't)

### What It Is

✅ **A focused openpilot fork** for Pre-AP Tesla Model S vehicles
✅ **A complete driving assistance system** with ACC, LKA, FCW, LDW
✅ **A platform for Pedal and Radar integration** to enhance functionality
✅ **A safety-first project** with clear warnings and limitations
✅ **A community-driven effort** building on boggyver's pioneering work

### What It Isn't

❌ **Not a multi-vehicle platform** - Only Pre-AP Model S
❌ **Not fully autonomous** - Requires constant driver attention
❌ **Not production software** - Beta quality for research/development
❌ **Not a replacement for attentive driving** - Driver assistance only
❌ **Not a commercial product** - Open source research project

---

## Development Status

### Current Status: **BETA**

**What This Means:**
- Core functionality is working and tested
- Known limitations and edge cases exist
- Active development and improvements ongoing
- Users should expect occasional issues
- Full driver attention required at all times

**Not Ready For:**
- Production deployment without understanding risks
- Use by non-technical users without support
- Reliance as primary vehicle control system
- Use without constant driver monitoring

**Requirements for Use:**
- Technical competence to troubleshoot issues
- Understanding of vehicle systems and limitations
- Acceptance of risks and responsibilities
- Willingness to maintain and update system
- Full engagement and attention while driving

---

## Community & Attribution

### Credit & Acknowledgment

**NotAutopilot builds on the work of:**

1. **boggyver** - Original tinkla creator, Tesla integration pioneer
2. **Lukas Loetkolben** - xnor fork maintainer
3. **comma.ai team** - Original openpilot creators and maintainers
4. **Tesla community** - Testing, feedback, and support
5. **All tinkla contributors** - Code, documentation, and community support

**NotAutopilot does not claim to have created:**
- The openpilot platform (credit: comma.ai)
- Tesla integration methods (credit: boggyver and tinkla community)
- Pedal Interceptor hardware (credit: comma.ai)
- Radar integration methods (credit: tinkla community)

**NotAutopilot's contribution:**
- Focused Pre-AP Model S fork
- Enhanced safety documentation
- Streamlined single-platform codebase
- Clear feature scope and limitations

---

## Licensing

### Software License

NotAutopilot inherits its license from openpilot:

**MIT License** - See LICENSE file for full terms

**Key Points:**
- Open source and freely available
- Can be modified and redistributed
- No warranty expressed or implied
- User assumes all responsibility and liability

### Disclaimer

**From openpilot license:**

> Any user of this software shall indemnify and hold harmless Comma.ai, Inc. and its directors, officers, employees, agents, stockholders, affiliates, subcontractors and customers from and against all allegations, claims, actions, suits, demands, damages, liabilities, obligations, losses, settlements, judgments, costs and expenses (including without limitation attorneys' fees and costs) which arise out of, relate to or result from any use of this software by user.

**THIS IS BETA QUALITY SOFTWARE FOR RESEARCH PURPOSES ONLY.**
**THIS IS NOT A PRODUCT.**
**YOU ARE RESPONSIBLE FOR COMPLYING WITH LOCAL LAWS AND REGULATIONS.**
**NO WARRANTY EXPRESSED OR IMPLIED.**

---

## Project Goals

### Short-Term Goals

1. **Stability**: Ensure reliable performance on Pre-AP Model S
2. **Documentation**: Comprehensive, clear, safety-focused docs
3. **Safety**: Prevent cross-vehicle installation accidents
4. **Usability**: Streamlined installation and configuration

### Long-Term Goals

1. **Refinement**: Continuous improvement of Pre-AP support
2. **Community**: Build a focused community around Pre-AP Model S
3. **Best Practices**: Establish safety-first development practices
4. **Legacy Preservation**: Maintain excellent support for Pre-AP vehicles

### Non-Goals

- ❌ Multi-vehicle platform expansion
- ❌ Commercial product development
- ❌ Full autonomy claims or features
- ❌ Feature parity with latest openpilot
- ❌ Support for non-Tesla vehicles

---

## Choosing the Right Fork

### When to Use boggyver's Original Fork

**Use boggyver's fork if you:**
- Have a Tesla Model S/X with AP1 hardware
- Have a Tesla Model S/X with AP2+ hardware
- Want Instrument Cluster integration
- Want to use Tinkla Buddy features
- Want iBooster brake integration
- Need multi-vehicle support

**Repository**: [boggyver/openpilot](https://github.com/boggyver/openpilot)

### When to Use NotAutopilot

**Use NotAutopilot if you:**
- Have a Pre-Autopilot Tesla Model S (2012-2014)
- Want focused, streamlined Pre-AP support
- Don't need IC integration
- Want clearer, safety-focused documentation
- Prefer simplified configuration options
- Value single-platform stability

**NotAutopilot Repository**: [Current repository]

---

## Future Direction

### Planned Improvements

1. **Enhanced Documentation**
   - More detailed troubleshooting guides
   - Video installation tutorials
   - Community FAQ compilation

2. **Code Refinement**
   - Remove unused AP1/AP2 code paths
   - Optimize for Pre-AP specific use case
   - Improve error handling and messaging

3. **Testing & Validation**
   - More comprehensive testing on Pre-AP variants
   - Edge case identification and handling
   - Performance optimization

4. **Community Building**
   - Gather feedback from Pre-AP users
   - Document real-world experiences
   - Build knowledge base of common issues

### What Won't Change

- **Vehicle Focus**: Pre-AP Model S only
- **Safety First**: Prominent warnings and clear limitations
- **Open Source**: Free and openly available
- **Research Status**: Beta quality, not production
- **Driver Responsibility**: Full attention required

---

## Questions About the Project?

### Understanding the Fork

**Q: Why create a separate fork instead of contributing to boggyver's?**
A: NotAutopilot has a different scope and philosophy. boggyver's fork aims to support all Tesla variants; NotAutopilot focuses exclusively on Pre-AP Model S for simplicity and safety.

**Q: Will features from boggyver's fork be backported?**
A: Only Pre-AP specific improvements. Multi-vehicle or IC features won't be added.

**Q: Can I switch to boggyver's original fork?**
A: Yes, you can install boggyver's fork if you need features NotAutopilot doesn't provide.

### Technical Questions

**Q: What openpilot version is this based on?**
A: openpilot 0.10.2

**Q: Will you update to newer openpilot versions?**
A: Potentially, if there are significant benefits for Pre-AP users and the update can be done while maintaining stability.

**Q: Is the code compatible with boggyver's fork?**
A: Partially. Core Pre-AP code is similar, but NotAutopilot has removed AP1/AP2 and IC integration code.

---

## Acknowledgments

Thank you to:
- **boggyver** for pioneering Tesla integration and making openpilot accessible to the Tesla community
- **comma.ai** for creating and open-sourcing openpilot
- **Lukas Loetkolben** for the xnor fork
- **The Tesla community** for testing, feedback, and support
- **All contributors** to openpilot and Tesla integration efforts

NotAutopilot stands on the shoulders of giants.

---

*This project is dedicated to the Pre-Autopilot Tesla Model S community.*

*Drive safely. Stay engaged. Take responsibility.*
