# Cabana

[Cabana](https://medium.com/@mattherich/comma-ai-panda-cabana-release-ae7940888c98) is a web application that allows you to inspect, label, and plot vehicle data collected by panda which can then be saved locally or committed to Git Hub in the form of a dbc file. Cabana syncs panda data with Open Pilot data for an extremely user-friendly reverse engineering experience. This allows you to easily scrub through video segments to target a specific driving event, such as braking, and label the associated CAN messages.

View example [here](https://community.comma.ai/cabana/) 

**Using cabana live:**

**Mac:**

```
Chrome --enable-features=Web USB
```

**Linux:**

```
sudo /opt/google/chrome/chrome -enable-features=Web USB --no-sandbox
```

**Windows:**

```
chrome://flags/#enable-experimental-web-platform-features
```

**How do I view my drives?**[Explorer](https://my.comma.ai) is where to go to view your recent drives. Select your drive and use the slider to skip through. Video playback is possible too, just press V where you want the video to start from. it may take a few seconds to start. Speed is updated when using the slider but stops when viewing video. You can also annotate disengagements (tell comma.ai why you took control of the vehicle) this helps improve the system and further development.

**Can I share my drives?**Yes, you can share your drives from via the corresponding Link, but keep in mind that these links can not be withdrawn and could expose your privacy.