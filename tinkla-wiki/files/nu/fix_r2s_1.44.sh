echo nameserver 8.8.8.8 &gt; /etc/resolv.conf
cd /etc/systemd/system/
curl -O https://tinkla.us/files/autossh.service
mv autossh.service autossh\@.service
chmod 755 autossh\@.service
systemctl daemon-reload
systemctl enable autossh@1.service
systemctl enable autossh@2.service
echo 1 &gt; /opt/tinkla/settings/tinklaTunnels
cd /opt/tinkla/scripts
curl -O https://tinkla.us/files/start_ap.en
reboot
