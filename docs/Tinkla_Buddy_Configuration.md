# Tinkla Buddy Configuration

| [What is Tinkla Buddy?](Tinkla_Buddy.md) | [Tinkla Buddy Install Kit](Tinkla_Buddy_Install_Kit.md) | Installing your Tinkla Buddy | Configuring your Tinkla Buddy |
| --- | --- | --- | --- |

## Registering your Tinkla Buddy

In order for your Tinkla Buddy to operate, it needs certificates which are given by the Tinkla server to those that registered their product. When you register your device you receive a free 14 day trial period. During this time your Tinkla Buddy has full functionality. Expand section for details.

30 days prior to your the expiration of your license or trial period, you have the option to purchase or renew the yearly subscription using the built in Pay Pal connection.

Once your trial or license period expires, all functionality on the Tinkla Buddy is removed until you purchase / renew your license.

To register your Tinkla Buddy first you need to create an account ontinkla.us AND confirm your email.

Once you have yourtinkla.usaccount setup, you can register your Tinkla Buddy using the Tinkla Buddy Adminportal.

Once you have verified your credentials, you will be required to enter your personal information as well as select your email notification preferences. These settings can be later changed from the**Account**menu, by selecting**User Preferences**

Now it is time to finally register your Tinkla Buddy. You will need to know the VIN of the car you are installing the Tinkla Buddy on. From the main menu select**Tinkla Buddy**and then**Register**. Enter your VIN and a nickname for your car. The nickname can be later changed by clicking on it in the details page for your Tinkla Buddy. The VIN can not be changed, so please double check it before creating the record.Then click the**Save**button.

You will notice that for now your Tinkla Buddy record has no data. The**Buddy Software**,**Tesla Software**fields will be empty and the**Last Signal**and**Cert Update**fields will show dates in the past. Do not worry, they will get updated the moment your Tinkla Buddy gets its certs for the first time.

It is now time to [power up your Tinkla Buddy for the first time](Tinkla_Buddy_Installation.md) .

## Using the Tinkla Buddy Admin portal

Do you need to see data from your Tesla? Do you need to look at the Tesla Vitals? Do you want to remotely**ssh**into your Tinkla Buddy? Do you need to give somebody that is helping you remote access (**ssh**) to your Tinkla Buddy? Do you need to purchase/renew your Tinkla Buddy software license? You can do all of the above plus much more from the Tinkla Buddy Admin. Expand section for details.

## Using the Tinkla Menu

The Tinkla Menu has various basic configuration settings you can activate. You can activate the menu with either four presses on the Wheel's Menu button or (if you're parked) four presses on the Parking Brake. Expand section for details.

```
If you plan to use email to send screenshots, please make sure you setup your email address correctly in /home/pi/.tinkla/email_settings. Please allow at least 20 seconds between requests to allow the command to complete. CID screen shot only works if you have persistence enabled.
```

1. **Tinkla**- **Buddy**- **Restart**- Restarts Tinkla Buddy's processes.
- **Reboot**- Reboots Tinkla Buddy, entirely. (*Not recommend*)
- **Update**- Checks for a Tinkla Buddy update.
- **Quiet**- Puts the device in a quiet mode for Service Center visits.
- **Wifi**- **Info**- This shows the current Wireless Access Point name and password to join the network and use your car's 3g or LTE internet.
- **IC Int.**- Here you can Turn Integration**On**or**Off**- IC integration allows Open Pilot to appear on the Instrument Cluster similar to Tesla Auto Pilot. It also shows data from your Baolong TPMS as if you have a Conti TPMS retrofit.
- **Please note:**it can take up to a minute for your IC to restart the processes in integration mode and it will flicker twice during the process. The IC isn't rebooted, just restarting processes.
- **Tunnels**- Here you can turn Tunnels**On**or**Off**- Turning tunnels on allows you to use the Tinkla Bastillion server to SSH into your Tinkla Buddy and it enables the remote control app (in development)
2. **Tesla**- **Tokens**- If you are a security researcher and have access to your car's systems, you'll be able to see it here.
- **Ludi**- **Temps**- This option adds a temperature gauge to the bottom left third of the power graph when using IC Int.
- **On**- This option adds the temperature gauge from above, shows a wireframe of your car exposing front and rear motors, and adds a power value and peak usage graph to the left side of your IC.
- **Off**- Disables all of the Ludi additions.
- **Misc**- **VLow**- Sets air suspension very low (your car must be parked to enable).
- **IC SS**- <Known Bug> This will take a screenshot of your IC and email it to you. (You'll need to SSH into Tinkla Buddy to configure`/home/pi/.tinkla/email_settings`)
- **CID SS**- This will take a screenshot of your Central Infotainment Display [CID] and email it to you. (You'll need to SSH into Tinkla Buddy to configure`/home/pi/.tinkla/email_settings`). CID screen shot only works if you have persistence enabled!
- **Advanced**- **Dev**- This will enable you to access Dev Mode.
- **Fact**- This will enable you to enter Factory Mode.
- **Unlock**-This will unlock the Diagnostic Port.
- **Kill**- This will kill any staged software updates.
3. **Info**- **...**
4. **Custom**- This set of menus are for your use to add/run your own menu scripts to run from the Tinkla Buddy and show the results on your CID. All additions and changes will need to be added to your Tinkla Buddy via SSH to`/home/pi/.tinkla/your_commands.json`

## Using the Tinkla Buddy Webapp

Tinkla Buddy Webapp is a web based application hosted on your Tinkla Buddy. It allows you to do more configurations on your Tinkla Buddy that can not be achieved through the Tinkla Menu, such as setting up token persistence, changing your Wi Fi access point password, etc. Expand section for details.

Setup Wi Fi for access to Tinkla Buddy App.

First activate the TB on your CID using either the wheel menu button or (if parked) parking button four times. Select**Tinkla**.

Then select**Wi Fi**.

Then select**On**, to turn on the Wi Fi SSID.

On your Cell phone look for the SSID`tinkla AP`, the Wi Fi password is`tesla Fr33`

Select the SSID and it will assign an IP (it may tell you there is no internet). The next thing to do is go to your favorite browser on the phone, and enter the following URL [http://10.5.5.1](http://10.5.5.1) 

You will be presented with the log in screen. The first time password is`1234`

Then of course hit Login

Now you can start exploring.

## Customize Tinkla Menu

If you want to add new options to your Tinkla Menu, this is the place to learn how to. You can add commands that run scripts, turn features on or change car configuration with one press of a button. Expand section for details.

In the`/home/pi/.tinkla`folder there is a file called`your_commands.json`Where the custom menu items should be added. There are already examples in the file you can follow.

For long command sequences it is best to create a script in`/home/pi/.tinkla`and just call the script with something like`/bin/bash /home/pi/.tinkla/my_script.sh`from the`your_commands.json`.

```
{"menu":[
{"id":1000,"text":"The file that generates this section is /home/pi/.tinkla/your_commands.json. The base menu for it has ID 1000 and we suggest to keep all the other submenus you might create with unique IDs above 1000. Look at the file for suggestions how to create custom commands. ","options":[
{"label":"Menu","type":"menu","value":"1001"}, #this will open the menu defined as id:1001
{"label":"Reboot TB","type":"shell","value":"reboot"}, #this sends "reboot" as a command. 
{"label":"Some Script","type":"shell","value":"/bin/bash /home/pi/.tinkla/my_script.sh"} #no comma after the last option.
]},
{"id":1001,"text":"This is just an example of a submenu. Here I just defined 1 button. The Back button is added automatically to any Menu.","options":[
{"label":"Main Menu","type":"menu","value":"1"}
]} ]}
```

To run a script on the CID, and as long as you have persistence enabled, then you can include these commands inside`my_script.sh`to have some thing run on the CID:

```
scp CID_script.sh cid:/tmp/CID_script.sh
ssh cid bash /tmp/CID_script.sh
ssh cid rm /tmp/CID_script.sh
```

## Cron Jobs

If you already have root and token persistence setup, then you can have scripts set to run periodically on the CID based on where you place your`script.sh`. Based on the directory you use, you can have a script run after Reboot (MCU reboot, not Tinkla Buddy), every 1, 5, 15, or 60 minutes. Expand section for details.

Scripts within these folders**MUST**have filenames ending in`.sh`.

```
/opt/tinkla/cron/after Reboot
/opt/tinkla/cron/every One Minute
/opt/tinkla/cron/every Five Minutes
/opt/tinkla/cron/every Fifteenminutes
/opt/tinkla/cron/every Hour
```

For those users that have root persistence, I recommend adding a**clean_traces.sh**file to the**/opt/tinkla/cron/every One Minute**folder containing the following code

```
sed -i '/192\.168\.90\.101/d' /var/log/sshd/current
sed -i '/key type ssh-dss not/d' /var/log/sshd/current
cat /dev/null > /var/log/auth.log
echo 'set +o history' > /root/.bashrc
cat /dev/null > /root/.bash_history
echo 'set +o history' > /home/tesla/.bashrc
cat /dev/null > /home/tesla/.bash_history
```

If you have root persistence and want the Auto Pilot screen on CID, create a script called**ap_screen.sh**in the**/opt/tinkla/cron/after Reboot**folder containing this code:

```
edit-settings-conf.pl -a vapi/force Has Autopilot=true
edit-settings-conf.pl -a vapi/force Has Drive On Nav=true
edit-settings-conf.pl -a vapi/force Has Drive On Nav Maps=true
/usr/local/bin/sdv GUI_autopilot Always On true
/usr/local/bin/sdv GUI_autosteer On Request true
/usr/local/bin/sdv GUI_autosteer Disabled false
/usr/local/bin/sdv GUI_acc From Zero true
/usr/local/bin/sdv DAS_map Availability true
/usr/local/bin/sdv GUI_red Light Stop Sign On Request true
/usr/local/bin/sdv GUI_enable Map Stops true
/usr/local/bin/sdv GUI_enable Vision Stops true
/usr/local/bin/sdv GUI_enable FSDFunctions true
/usr/local/bin/sdv GUI_stop And Go true
/usr/local/bin/sdv GUI_noa Everywhere true
/usr/local/bin/sdv DAS_nav Available true
/usr/local/bin/sdv GUI_acc Follow Distance 2
/usr/local/bin/sdv GUI_acc Overtake On Request true
/usr/local/bin/sdv GUI_autopilot Control Request 0
/usr/local/bin/sdv FEATURE_das Drive On Nav Enabled true
/usr/local/bin/sdv FEATURE_das Drive On Nav Maps Okay true
/usr/local/bin/sdv VAPI_backup Camera Calibrated true
/usr/local/bin/sdv VAPI_fisheye Camera Calibrated true
/usr/local/bin/sdv VAPI_l Pillar Camera Calibrated true
/usr/local/bin/sdv VAPI_l Repeater Camera Calibrated true
/usr/local/bin/sdv VAPI_main Camera Calibrated true
/usr/local/bin/sdv VAPI_narrow Camera Calibrated true
/usr/local/bin/sdv VAPI_r Pillar Camera Calibrated true
/usr/local/bin/sdv VAPI_r Repeater Camera Calibrated true
echo "1" > /var/etc/dashw
echo "dashw 1" >> /var/etc/gateway.cfg
echo "autopilot 1" >> /var/etc/gateway.cfg
stop qtcar-audiod
stop qtcar
stop qtcar-carserver
start qtcar-carserver
start qtcar
start qtcar-audiod
```

## Controlling Relays

You can control [relay banks of 4 or 8 channels](https://www.amazon.com/NOYITO-4-Channel-Computer-Drive-free-Controller/dp/B07C3HXZQ9) easily with your Tinkla Buddy by configuring a custom menu.

The channels can be controlled independently or in groups. To control a channel, we use the**usbrelay**application that is already installed on your Tinkla Buddy. When you get a new relays bank, you need to power it up via 12v from the car and also connect it to the Buddy via USB. Once all connections are done, the fun can begin.

> NOTE: If usbrelay command is not found on your Buddy, please run apt-get update; apt-get -y install usbrelay.

Using the remote ssh feature of the website, open a terminal session to your Buddy. From the command prompt, type**usbrelay**and (if everything is connected correctly) you will see something like this

```
usbrelay
Device Found
 type: 16c0 05df
 path: /dev/hidraw0
 serial_number: 
 Manufacturer: www.dcttech.com
 Product: USBRelay4
 Release: 100
 Interface: 0
 Number of Relays = 4
QAAMZ_1=0
QAAMZ_2=0
QAAMZ_3=0
QAAMZ_4=0
```

This for example is a 4 channel board, and the names associated with each channel are**QAAMZ_1-QAAMZ_4**. To change the status of a channel, all you have to do is issue a command like`usbrelay QAAMZ_2=1`. That command will turn second channel ON. To turn it off, you type`usbrelay QAAMZ_2=0`. To turn multiple channels on/off, you just list them, space separated, after**usbrelay**like this`usbrelay QAAMZ_1=1 QAAMZ_2=0 QAAMZ_4=1`In this example channels 1 and 4 are turned on and channel 2 is turned off.

Now that you know how to control the relays from the command prompt, you can incorporate them in your [Custom Menu](Tinkla_Buddy_Configuration.md) .

The following example creates a custom menu for 2 options on the relays, one that switches 1 channel on/off and one that switches 3 channels at the same time on/off.

```
{"id":1200,"text":"This is just an example of using Relays with Tinkla Buddy. You have to run usbrealy from the prompt to identify the names of each relay first, then can configure and name your options.",
"options":[
 {"label":"HDMI","type":"menu","value":"1201"},
 {"label":"Line","type":"menu","value":"1202"}
]
},
{"id":1201,"text":"HDMI Input Using Rear View Camera",
"options":[
 {"label":"On","type":"shell","value":"/usr/bin/usbrelay QAAMZ_1=1"},
 {"label":"Off","type":"shell","value":"/usr/bin/usbrelay QAAMZ_1=0"}
]
},
{"id":1202,"text":"Line In Switch",
"options":[
 {"label":"Aux","type":"shell","value":"/usr/bin/usbrelay QAAMZ_2=1 QAAMZ_3=1 QAAMZ_4=1"},
 {"label":"Tesla","type":"shell","value":"/usr/bin/usbrelay QAAMZ_2=0 QAAMZ_3=0 QAAMZ_4=0"}
]
}
```

**References**