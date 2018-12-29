# Vagrant Tutorial

- [Intro](#Intro)
- [Use](#Use)
- [Vagrant Config Instructions](#vagrant-config-instructions)
- [Basic Commands](#basic-commands)

## Intro

### Vagrant is a tool that easily set up an environment that looks similar to the actual working environment.

---

# Use

### To use vagrant, you should first find your desired virtual environment from [here](https://app.vagrantup.com/boxes/search).

To start your environment, you should use the following command.

```bash
vagrant init ubuntu/trusty64
```

It may take several minutes if the enviroment is first used.

---

# Vagrant Config Instructions

- `config.vm.box` - Operating System

- `config.vm.provider` - Virtual Box

- `config.vm.network` - How you host sees your box

- `config.vm.synced_folder` - How you access files in your computer

- `config.vm.provision` - what we want setup

---

# Basic Commands

If `Vagrantfile` is not present, you have to init vagrant by:

```
vagrant init `ubuntu/trusty64`
```

If `Vagrantfile` is present, just run:

```
vagrant up
```

```
vagrant resume
```

```
vagrant suspend
```

```
vagrant destroy
```

```
vagrant ssh
```

---

# TODO:

Can use it to test `ansible-playbook`
