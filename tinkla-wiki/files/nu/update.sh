cd /data
mkdir tinklaupdater
cd tinklaupdater
curl -O https://tinkla.us/files/nu/neos.py
curl -O https://tinkla.us/files/nu/neos.json
chmod 755 ./neos.py
rm -rf /data/openpilot
cd /data/
git clone https://github.com/boggyver/openpilot.git --depth 1 -b tesla_unity_releaseC2 /data/openpilot
cd tinklaupdater
./neos.py --swap neos.json

