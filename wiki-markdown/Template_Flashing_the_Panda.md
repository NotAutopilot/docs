# Template:Flashing the Panda

After installing or updating OpenPilot on your EON, you need to also update the software on your Panda. Here's how:

In your Tesla while it says “Car Off” connect your Panda to your Giraffe rev B OBD (or EPAS OBD). Connect your EON to the Panda via USB. Then SSH in and run:

```
cd /data/openpilot/panda/board
killall boardd
make clean
make && sleep 1 && (make recover || make recover) && echo Success! Rebooting in 2s... && sleep 2 && reboot
```

The kill command ensures that the EON stops regular communication to the Panda. That's also why a reboot is needed at the end. If any error occurs (which of course should not happen) the reboot will be skipped so you can troubleshoot.
AssertionErrors should be fixed by rebooting EON and trying a second time. Optionally you may also power cycle your Panda by reseating it.