# Advent of Code 2024

Doing this to try and learn a bit more about PHP. 

So that I didn't need to install PHP on my computer directly, I made the `Dockerfile` and then ran this command: 

```bash
docker build -t php-runner .
```

Then I can run this to run each script in php.

```bash
docker run -v $(pwd):/scripts php-runner php day1.php
```

I made a bash script (`run.sh`) so I can run the above command like this:

```bash
./run.sh day1.php
```
