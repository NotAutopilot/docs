# SoftPanda

```
DISCLAMER: Improper changes to IC or CID can result in the system (and thus your car) being rederend unusable. Potentially not even Tesla can revert some of the changes if done incorrectly. You are doing this at your own risk. You alone are ultimately responsible, not the creator of this site, Comma.ai, Comma.ai community, Tesla, or anyone else.
```

SoftPanda is a piece of software that makes the car's interfaces look and feel like OpenPilot shipped with the car.
The IC integration runs the AutoPilot view, powered by OpenPilot. CID integration adds settings for OpenPilot in the car's menu.
Additionally, softPanda adds map based speed control as well as control over max speed offset.
**To install and use the softPanda for IC/CID integration you have to have root access and modify important files on the IC and CID of your Tesla car. Please read carefully the whole document as well as the disclaimers. If you have questions or doubts, please reach out to our user group on the Comma.ai Tesla channel on Discord.**

```
Before Attempting Integreation with SoftPanda, have you considered trying Tinkla Buddy?
```

```
Seriously, Tinkla Buddy is worth a shot.
```

### Changes to OpenPilot Configuration File

The following options must be set to true in the[OpenPilot Configuration File](OpenPilot_Configuration_File.md) for the IC/CID integration to work:

```
enable_das_emulation = True
has_tesla_ic_integration = True

# if this is false, the corresponding setting on CID will switch to on after every restart
use_tesla_map_data = True
```

### Download softPanda Executable

Download the[softPanda](https://tinkla.us/files/softPanda) executable to**/var/root/bin**on your CID with the following commands:

```
cd /var/root/bin
curl -O https://tinkla.us/files/softPanda
```

### Download Language Strings File

Find and download the QtCar_xx.qm specific to your language (for example English is**en**) on both IC and CID and place it in**/var/root/lang**on both systems.

English -QtCar_en.qm
German -QtCar_de.qm
Spanish -QtCar_es.qm

To get the files you can do this**on both IC and CID**(change the file URL to the language your car displays)

```
cd /var/root/lang 
curl -O https://tinkla.us/files/QtCar_en.qm
```

```
ssh ic
cd /var/root/lang 
curl -O https://tinkla.us/files/QtCar_en.qm
```

### Changes on IC

```
DISCLAMER: Improper changes to IC or CID can result in the system (and thus your car) being rederend unusable. Potentially not even Tesla can revert some of the changes if done incorrectly. You are doing this at your own risk. You alone are ultimately responsible, not the creator of this site, Comma.ai, Comma.ai community, Tesla, or anyone else.
```

Add the following 5 lines at the top of this**[special file](Root_Special_file.md) **on**IC**.
Make sure both language file names match your car's language.

```
/bin/mount | /bin/grep -c /var/root/lang/QtCar >/dev/null || /bin/mount --bind /var/root/lang/QtCar_en.qm /usr/tesla/UI/bin/QtCar_en.qm
QCPORT=":20201"
export QCPORT
QCHPPORT=":31515"
export QCHPPORT
```

### Changes on CID

```
DISCLAMER: Improper changes to IC or CID can result in the system (and thus your car) being rederend unusable. Potentially not even Tesla can revert some of the changes if done incorrectly. You are doing this at your own risk. You alone are ultimately responsible, not the creator of this site, Comma.ai, Comma.ai community, Tesla, or anyone else.
```

CID integration (OpenPilot Menu) is currently only supported on**2019.4.2**and below.
Add the following 4 lines at the top of this**[special file](Root_Special_file.md) **on**CID**.
Make sure both language file names match your car's language.

```
/bin/mount | /bin/grep -c /var/root/lang/QtCar >/dev/null || /bin/mount --bind /var/root/lang/QtCar_en.qm /usr/tesla/UI/bin/QtCar_en.qm
QCPORT=":20201"
export QCPORT
```

> NOTE: Do NOT declare QCHPPORT on CID!!!

### Updating Maps

If you have older version of maps on your CID, you might need to[update](Root_Update_maps.md) them.

### Startup Script

Use/var/root/scripts/startSoftPanda.shscript.

### Changing the cron

In order to start the script you need to modify your[cron](Root_Crontab.md) and add the following 2 lines:

```
@reboot /sbin/start-stop-daemon --start --quiet --make-pidfile --oknodo --background --pidfile /var/run/softPanda.pid --exec /bin/bash /var/root/scripts/startSoftPanda.sh
*/1 * * * * /sbin/start-stop-daemon --start --quiet --make-pidfile --oknodo --background --pidfile /var/run/softPanda.pid --exec /bin/bash /var/root/scripts/startSoftPanda.sh
```

### A simple restart script

The softPanda startup script creates a lock file and prevents two restarts in less than 10 minutes to allow you to still access your car computers in the event of a mistake. To manually restart the process you have to delete the lock file and then kill the softPanda process. Or just create a[bash file](Root_RestartSoftPanda.md) with this content and run it.

### Optional Flags

Here are the optional flags for softPanda EtherCan Proxy

> NOTE: If you are running Tesla software 2019.16 or later, you have to enable the -fix1916 flag!

- -runOnIc: sets the spammer to run on IC instead of CID (CID default)
- -triggerOnCan: start the spam only when receiving a certain CAN message from EON (OFF by default)
- -autoRestartQtCarCluster: sends command to restart QtCarCluster when app starts (OFF by default)
- -onlyCarConfig3: sends spam only for DasHw in GTW_carConfig3 (OFF by default)
- -spamFrequency XX: spam frequency in Hz (100Hz by default)
- -autopilot Y: autopilot mode (1:Highway, 2:Enhanced DEFAULT, 3:SelfDrive)
- -bridge ZZZZZ: bridge mode where the packets received on 20101 are sent to port ZZZZZ (20102-27000)
- -hBridge ZZZZZ: bridge mode where the packets received on 31415 are sent to port ZZZZZ (31515-32000)
- -sendAfterReceive: sends modded message right after it is received (OFF by default)
- -bindToPort WWWWW: Binds to a certain port and local IP address for sending (OFF by default)
- -sendDiAccStatus: Send the DI_accStatus message; experimental for now (OFF by default)
- -modifyDiState: Modifies the DI_state message for long control showing on IC (OFF by default)
- -includeParrot: Include data from parrot to be sent through the bridge (OFF by default)
- -includeLb: Include data from LB to be sent through the bridge (OFF by default)
- -forwardDebug: forward also the debug messages show in Developer Mode (OFF by default)
- -forwardUnique: forward only unique CAN messages in each direction (OFF by default)
- -fix1916: fix DI_Status CAN change that started with 2019.16 (OFF by default)
- -tpmsConti: Allows tire pressure display on Baloong TPMS system, DO NOT USE ON CONTI

### Help, All Screens Are Black!

It’s not uncommon to see both IC and CID black the first time you start your car after enabling everything. This is caused by the CID not receiving messages from the gateway to wake up, which in turn is caused by softPanda having either not started or crashed. (Remember in the steps above we tell the CID to only listen to the gateway on the port softPanda proxies data to it on). The car will still drive with no screens, if you push the brake and wait 30 seconds for the gateway to give up trying to contact the screens.

Quickfix: Reboot the CID using the steering wheel (sometimes the speakers give a slight pop when the reboot command is executed). If everything is setup properly, the screens should come up. Steering wheel reboots are not preferred as they aren’t graceful restarts.

Preferred fix: ssh into the CID and restart softPanda, or troubleshoot what happened and then restart it.