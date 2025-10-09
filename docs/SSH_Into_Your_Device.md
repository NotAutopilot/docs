# SSH Into Your Device

## SSH when device is running a version after 0.8.3

1. You need a GitHub account. Make one if you don't already have one.
2. Enable SSH on your comma two:**Settings -> Network -> Enable SSH**
3. Enter your GitHub username for SSH:**Settings -> Network -> SSH Keys**(hit**Remove**and then**Add**if needed).
4. Obtain the IP of your devices from**Settings -> Network**
5. Ping the device address from your computer to make sure it is reachable.
6. Under a Unix/Linux, macOS terminal or Windows 10 with OpenSSH, use the command:

```
ssh root@<IP address of comma two> -p 8022 -i <path to private github key>
```

for Comma two/EON Gold or

```
ssh root@<IP address of comma three> -p 8022 -i <path to private github key>
```

for Comma three.

If you assign a fixed IP through your router reservations, then you can configure ssh so you can ssh by just doing**ssh eon**. To do so, add the following lines to your**~/.ssh/config**file:

```
Host eon 
 HostName <IP address of comma two>
 Port 8022
 IdentityFile <path to private github key>
 StrictHostKeyChecking no
```

For more info visit [the comma wiki](https://github.com/commaai/openpilot/wiki/SSH#openssh-or-similar-client)

## SSH when devices is running a version before 0.8.3

1. Download the private key from the [openpilot repo](https://github.com/commaai/openpilot/blob/master/tools/ssh/id_rsa). Save the key file as a text file and name it something like key.pem.
2. Open a terminal
3. Run**chmod 600 key.pem**(otherwise, the system will think the text file is not safe).
4. Get the IP address of your comma two from**Settings > WiFi > Open WiFi Settings > More Options > Options (top right icon) > Advanced**(please make sure your comma two and your computer connect to the same WiFi).
5. Ping the device address from your computer to make sure it is reachable.
6. Under a Unix/Linux, macOS terminal or Windows 10 with OpenSSH, use the command:

```
ssh root@<IP address of comma two> -p 8022 -i key.pem
```