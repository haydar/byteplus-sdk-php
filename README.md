## Usage

### composer require
```
composer require haydar/byteplus-sdk-php
```

### Region Setting
- Currently one region
  ```
  - ap-singapore-1
  ```
- Default ap-singapore-1, Specify region as param in init function if needed：
  ```
  $client = Iam::getInstance('us-east-1');
  ```

### AK/SK Setting
- Use VodService method setAccessKey/setSecretKey in code

- Set env variables BYTEPLUS_ACCESSKEY="your ak"  BYTEPLUS_SECRETKEY = "your sk"

- json file at ～/.byteplus/config：{"ak":"your ak","sk":"your sk"}

Above will take precedence from high to low

#### More examples:
You can find examples for every service under the examples folder.



