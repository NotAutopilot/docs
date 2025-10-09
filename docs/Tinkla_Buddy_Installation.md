# Tinkla Buddy Installation

| [What is Tinkla Buddy?](Tinkla_Buddy.md) | [Tinkla Buddy Install Kit](Tinkla_Buddy_Install_Kit.md) | Installing your Tinkla Buddy | [Configuring your Tinkla Buddy](Tinkla_Buddy_Configuration.md) |
| --- | --- | --- | --- |

## Creating the SD card

- On Windows PCs you can use Win32Disk Imagerto create to burn the image to the SD card for your Tinkla Buddy.
- On Linux flavors (including Mac OS) you can just use the dd command.

```
dd if=tinkla_buddy.img of=/dev/dse status=progress
```

where**tinkla_buddy.img**is the name of the disk image you downloaded from this site and**/dev/sde**is the device corresponding to your SD card mounted on Linux.

```
Writing the image to the SD card can take 30 minutes.
```

### Disk Images

Please select the appropriate image for your device.

| Device | Image | MD5sum |
| --- | --- | --- |
| R2S | [v1.44-R2S (built 11/11/2022)](https://tinkla.us/files/tinkla Buddy-R2S-1.44-11.11.2022.img.gz) | 422678aa480ed25058a7dbcbd623748c |
| R1S H5 | [v1.44-H5 (built 09/22/2020)](https://tinkla.us/files/tinkla Buddy-H5-1.44-09.22.2020.img.gz) | 6a4de9389a17438cbf7c198606eaf8d8 |
| R1S H3/R1 H3 | [v1.44-H3 (built 09/22/2020)](https://tinkla.us/files/tinkla Buddy-H3-1.44-09.22.2020.img.gz) | f08619695fef1c88584bd23e3dcd8bc8 |

**Note:**the image file is very large (650+ Mb compressed) and will take some time to download. Also, depending on the speed of your SD card, it may take a long time to burn.

## Physical Buddy Installation

The hardest part of installing a Tinkla Buddy is finding an always-on power source. The three most viable options are (a) if you have a Tesla with the Cold Weather package there is a fuse box near the accelerator which makes this a 30 minute install, (b) if you have a fuse box behind the passenger kick panel (2016 and later) and you'll need to re-crimp your 12v red wire for an hour install, or (c) if you don't have a fuse box in the cabin pull a wire through a gasket on the firewall behind the washer fluid reservoir in the Frunk which can take 1-2 hours.

### Instrument Cluster Connections

After you have [removed the Instrument Cluster (IC)](Removing_the_Instrument_Cluster.md) , and you can access the Fakra cable on the back, you connect your LAN Fakra-RJ45 cable directly on to the back of the IC and then use the WAN Fakra-RJ45 cable and connect it to the cable that was previously connected to the IC. Remember you will have two use two CAT5e/CAT6 cables to connect the included Fakra-RJ45 adapters to the Tinkla Buddy. I recommend getting some 2ft or 3ft ones from your local store.

```
Note: The fakra connector is coming straight out. Get a flat head and push on the tab. In my case it was taped tightly to the loom bringing power in, so there was no fear of it falling into the dash. If that does happen to you, you can get to it by going under the steering wheel (see pics below for reference). Plug your new cable into the IC and then plug the other into the car’s cable (only one right way to plug them). Route the cables back in the hole behind the IC where the original network cable came from. Push the IC back into place on its alignment pegs. You’ll want to get both cables over to the left “hatch” on the left of the dash; that’s a good place to put the Buddy. In my case I just stuck it next to the pedal so running power was easy.
```

Here is a diagram of the end result:

While the Dash is already open, this is a good time to run [power for your Tinkla Buddy](Tinkla_Buddy_Installation.md) .

### Power

```
Tinkla Buddy requires constant 5V/2A to operate. If you have a Tinkla OBD-C Adapter for pre AP Tesla Model S, you can use the specially designed USB-A port to power the Tinkla Buddy. If you do not have an Tinkla OBD-C adapter, you will have to install a power adapter for your Buddy to convert 12V power to 5V power like this one.
```

If you do NOT have a [Tinkla OBD-C Adapter](Tinkla_OBD-C_Adapter.md) , you will have to find a way to power your Tinkla Buddy from another source using a 12V to 5V power adapter [like this one](https://a.co/d/fyu V6Zh) . Based on your Tesla Model and included packages, you'll want to follow the corresponding installation guide for Power. We'll need a 12v constant power supply. Places like the USB outlets or 12v accessory outlet are not good because those switch off when the car is "off". If you have an AP1 car or have completed the full AP1 retrofit**and**you aren't using it for Open Pilot power, you can just use the empty OBD port or tap the power line that goes to the OBD port behind it for a permanent install.

There are different [power options for accessories](Power_Options_For_Accessories.md) depending on the year your Tesla was built and the packages you have installed.

Once you identify the fuse you will tap, remove the original fuse and, using a voltmeter, identify the side of the fuse socket that has the permanent 12V. This is important to know because otherwise you will end up running the circuit through two fuses and create issues. The side**without**the wire of your fuse tap should go where the 12V constant power was identified. Place the original fuse in the lower fuse socket and use the new fuse for the TB power circuit in the upper socket. See diagram below.

Once you're done running power we can move on to [powering up the Tinkla Buddy for the first time](Tinkla_Buddy_Installation.md) .

## Powering up the Tinkla Buddy for the first time

Before you're ready to power the Buddy:

1. Make sure you have the RJ-45 barrel on the network cables,
2. Make sure the IC and CID are online,
3. Make sure the Tesla is ON. (Press and hold the Brake until you hear/feel the car turn on.)
4. If you have not done it yet, now it's the time to [Register your Tinkla Buddy](Tinkla_Buddy_Configuration.md) . It will not receive certificates from the server otherwise and thus it will not work.

Then while the Buddy is unplugged from power, remove the RJ-45 barrel and insert the RJ-45 cables into the correct jack on the Buddy.

- The CID goes in the WAN port
- The IC goes in the LAN port.

```
The SD card with the latest disk image should be inserted into the Tinkla Buddy BEFORE power is connected to the Buddy.
```

Now you can plug power into the Tinkla Buddy.

```
At this point the Buddy will reboot 3-4 times, and then attempt to receive the certs from the Tinkla Buddy server. This takes about 4-5 minutes. Image inflation can take a good deal longer. Walk away from your car and give the Buddy about 20 minutes to finish initializing. When you return you should see two flashing green LEDs on the Tinkla Buddy and one red flashing LED.
```

## Install Complete

```
To get IC Auto Pilot integration view, update your Open Pilot Configuration File to look like: enable_das_emulation = True then when the car is "On" showing PRND, the IC will do a soft restart and change to the Auto Pilot view.
```

To see if it is working you have two ways to activate the Tinkla Menu:

1. Press steering wheel menu button 4 times, if this does not work, then go to step 2.
2. Press park button 4 times fast.

## Forcing an update

With the changes Tesla make to their software, there might be times when you need to manually force a software update on the Buddy. Such a situation happneed if your car was updated to 2022.8.10.8 but your buddy was still running v1.44 at that time. In order to update to the latest version, you will have to manually ssh into the Buddy and run a few commands.

### Force SSH into the Tinkla Buddy

To force ssh into the Tinkla Buddy (either tunnels are not up because of some fault in the configuration or a certain Tesla software update rendered your code absolete) you will need a laptop that has `ssh` capabilities and a few configuration options all listed below.

- Disconnect the LAN cable from the Buddy (the one that connects the IC to the Buddy) and use the LAN port on the Buddy and an ethernet cable to connect your laptop to that port.
- Manually set the IP address on your laptop to match the IP address of the IC (192.168.90.101 with a net mask of 255.255.255.0)
- Once the IP is set, ssh into the Tinkla Buddy using the following command

```
ssh pi@192.168.90.69
```

and use***pi***as the password, unless you changed it, then use the new password you set.

### Force Upgrade command sequence

```
sudo su
cd /opt/tinkla-updater
curl --fail -s "https://tinkla.us/buddy/cksftupd.php?v=1&sv=1.44&c=active&h=H5" -o ./update.sh
bash update.sh
reboot
```