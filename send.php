<?php

mail(
  "os_smirnova92@mail.ru",
  "Test Ajax",
  $_REQUEST["fio"] . " " . $_REQUEST["phone"]
);