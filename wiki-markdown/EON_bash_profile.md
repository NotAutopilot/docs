# EON bash profile

### A set of shortcuts for bash on EON

Here is a set of shortcuts I used constantly on my EON, mainly when connected from the phone. Every time you will SSH it will take you automatically to /data/openpilot/car/tesla.

Some notable ones:

#### Commands

- fp - flashes your[Panda](Panda.md)and reboots[EON](EON.md)on success (stops on error to show what went wrong)
- so "text to search" - Searches all source code for the text to search
- gcp - a sequence of commands that allows you to commit and push the code to the repo
- gcpa "my commit comment" - a sequence of commands that allows you to commit all changes and files and push to the repo
- killop - kills OpenPilot tmux session
- runop - runs OpenPilot in shell session; amazing for debug purposes
- mrw - mounts file system in read/write mode
- mro - mounts file system in read only mode

#### Edit Sessions

- vic - vi carcontroller.py
- vis - vi carstate.py
- vii - vi interface.py
- vit - vi teslacan.py
- vips - vi safety_tesla.h

#### Change Directory

- cdo - change directory to /data/openpilot
- cdp - change directory to /data/openpilot/
- cdt - change directory to /data/openpilot/car/tesla
- cdm - change directory to /data/openpilot/car/modules

#### Source Code

To save this file on your EON in your home directory first you have to SSH into your EON and then execute the following commands:

```
mount -o rw,remount /system
nano ~/.bash_profile && source ~/.bash_profile
```

The first command makes the file system writable. The second one opens the editor and the`source`command at the end ensures that you can use the commands we are about to add right away after saving the opened file.

In the editor, replace all the contents with the following code and then exit and save:

```
export EDITOR='vim'
export TERM='xterm-256color'
export PS1="\u@\h:\[\e[36m\]\w\[\e[0m\]\$ "
export PREFIX='/usr'
export VALGRIND_LIB='/usr/lib/valgrind'

# add these symlinks if you want
export PYTHONPATH="/data/pythonpath"
export GIT_SSH_COMMAND="ssh -i /data/gitkey"
export LANG="en_US.UTF-8"

export VIMINIT='source $MYVIMRC'
export MYVIMRC="/data/data/com.termux/files/home/.vimrc"

# Disable history writing
export PYTHONSTARTUP="/data/data/com.termux/files/home/.pythonrc"

function fp() {
 cd /data/openpilot/panda/board
 killall boardd
 make clean
 make && sleep 1 && (make recover || make recover) && echo Success! Rebooting in 2s... && sleep 2 && reboot
}

function gcpa() {
 git update-index --assume-unchanged /data/openpilot/.gitignore
 git update-index --assume-unchanged /data/openpilot/launch_chffrplus.sh
 git update-index --assume-unchanged /data/openpilot/selfdrive/visiond/visiond
 git commit -a -m "$1"
 git push
}

function gcp() {
 git commit -m "$1"
 git push
}

function so() {
 grep -rni --color=auto --include=\*.{py,h,c} /data/openpilot/ -e "$1"
}

cd /data/openpilot/selfdrive/car/tesla
export PYTHONPATH="/data/openpilot/"
alias vic="vi /data/openpilot/selfdrive/car/tesla/carcontroller.py"
alias vis="vi /data/openpilot/selfdrive/car/tesla/carstate.py"
alias vii="vi /data/openpilot/selfdrive/car/tesla/interface.py"
alias vit="vi /data/openpilot/selfdrive/car/tesla/teslacan.py"
alias vio="vi /data/bb_openpilot.cfg"
alias killop="tmux kill-session -t comma"
alias vips="vi /data/openpilot/panda/board/safety/safety_tesla.h"
alias cdo="cd /data/openpilot"
alias cdp="cd /data/openpilot/panda/board"
alias cdt="cd /data/openpilot/selfdrive/car/tesla"
alias cdm="cd /data/openpilot/selfdrive/car/modules"
alias mrw="mount -o rw,remount /system"
alias mro="mount -o ro,remount /system"
alias runop="/data/data/com.termux/files/continue.sh"
```