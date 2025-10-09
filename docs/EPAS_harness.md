# EPAS Harness

```
Tesla Model S manufactured after 7/14 can use the A-pillar harness for Open Pilot. This harness takes minutes to install with only 1 screew to remove (in order to remove the A pillar cover). This new harness also simplifies the install of the Tesla Bosch Radar. Please ask in the discord group about availability and compatibility.
```

```
IMPORTANT: Only use twisted-pair (and if possible shielded) cables for any CAN bus communication line, like the EPAS harness. Do not gamble with low quality cables. I recommend using Belden 8723 060-U500.
```

## Buy a pre-made EPAS Harness

You can buy a pre-made EPAS Harness for use with a Giraffe from [EV Cables Company](https://evcablescom-tech.3dcartstores.com/Tesla-Open-Pilot-EPAS-Harness_p_1.html) (managed by @Star Log#6425) or skip the Giraffe and buy a Giraffeless cable from [EV Cables Company](https://evcablescom-tech.3dcartstores.com/Tesla-Openpilot-EPAS-bypass-wiring-harness-for-level-2-self-driving_p_3.html) or from [Flyboy222pa on e Bay](https://www.ebay.com/str/level2tesla) .

## Make your own EPAS Harness

AWG Chart- You can follow @Deftdawg's EPAS creation video
- When creating harnesses, please use the AWG chart to select the right wire gauge for your amps and length needs.- **NOTE:**It is not recommended to solder the JST2 plugs prior to fishing the wire into the driver footwell, so pause watching this video around the 34minute mark. The fishing process can easily destroy JST2 solder joints, so it's better to fish the wire first and then strip and solder the connections on when the wire is already into the cabin.
- **SECOND NOTE:**There is another way to fish the EPAS cable through the firewall that will take a bit more work, and we don't currently have instructions written. If you'd like to help us document by performing this method and taking pictures, we'd appreciate it.
- @Raf & @erflesby's guide here:[Putting together a tesla EPAS wire harness](https://docs.google.com/document/d/1q5Jj Wp0YRn We-4rby W1Z0T3OT5UOAs H0r Tv5Mr0-8Eo/edit?usp=sharing)

1. Use velcro ties to secure the EPAS Cable to the existing harness in the car until you are sure everything works and you won't be needing to remove EPAS cable to work on it further.
2. Fish the unfinished end of the cable under the washer container, then through the first hood metal support piece to the gap and then pull all of the slack through that gap. Reinsert the unfinished end back into the gap while keeping a finger or screw driver under it to keep the cable from falling down flat into the gap, this will help the cable not catch on where the second metal hood support meets the body as you push the cable towards the cabin. Once the cable emerges next to the door seal, pull it through from the cabin side and work it in behind the seal and the diagnostics port.
3. Once the cable is in the gap between the driver left side footwell cover and the panel containing the OBD2 port, do your soldering of the JST2 connector.
4. Prior to connecting the cabling, it's a good idea to test your EPAS cable for continuity and shorts [this is for your sanity, nothing bad will happen if you skip this]- **Shorts:**with the EPAS cable not plugged into the Car or the giraffe, put spare pins into 2 and 5 and touch your leads to them. If you get continuity make sure that the pins are not in contact, if they are not in contact double check the insulation on your solder connections to your JST2 plug.
- **Continuity:**with the spare pins still inserted in 2 and 5, jumper the JST2 plug end. Touch your leads to the 2 and 5 pins, if you get continuity make sure that the pins are not in contact, if they are not, then the cable is good. If you get no continuity, check that your solder connections to the JST2 plug haven't been broken.
5. Plug your panda into your giraffe, plug your giraffe into your OBD2 plug... The car may give you some error messages about parking brake, etc... Connect your EON to the panda via the USB cable. Turn on tethering in the EON and connect to the EON hotspot, then ssh to 192.168.43.1 port 8022 using the Open Pilot RSA key and [Flashing the Panda](Panda.md) manually (currently automatic flashing is not supported). Once flashing is complete, you can disconnect your EON again, remove and reinsert your giraffe, hopefully the car should not complain (if it does let us know, but continue anyway).
6. With a good cable, you can remove any testing jumpers and spare pins and connect to to the EPAS servo unit and connect it to the giraffe. Again the car should not complain. If you get an error that "Power Assist is not available", it means that your CAN +/- pins (2 and 5) need to be flipped. You test this by cross wiring a JST2 connector to a JST2 plug and then inserting that between your JST2 connector and EPAS cable... If you do this, you may need to put the car in drive and manually feel if power steering works before the error clears (if steering is normal the error should clear, if not it will feel very heavy). The easiest way to resolve this is to disconnect the JST2 cable from the giraffe and use a small edge to lift the plastic lock tab while depressing the spring clip to release the JST2 connects and then insert black in the red position and vice-versa, the plug the JST2 cable back into the giraffe, put the car in drive and recheck the steering.
7. [Install the EON](EON.md) in your windshield.

- Mouser shopping list:- [Female connector](https://www.mouser.com/Product Detail/571-1-967616-1)
- [Female pins](https://www.mouser.com/Product Detail/571-5-962885-1-LP)
- [Male connector](https://www.mouser.com/Product Detail/571-1-967587-3)
- [Male pins](https://www.mouser.com/Product Detail/571-1-928918-1-CT)
- [Rubber seal plug](https://www.mouser.com/Product Detail/571-967067-1)
- [Rubber seal for cable](https://www.mouser.com/Product Detail/571-967056-1)

You can follow @Robert Cotran's full OP installation (including the EPAS harness) video.

Other resources:

- [@Raf's Installing EPAS cable guide in pictures doc](https://docs.google.com/document/d/16b Kxc IXW9Qk Y05k Q6238pz V3qi Sp C-DRYwkfk N2d Ob M/edit?usp=sharing)