<?php

return [
    'alipay' => [
        'app_id'         => '2016101500688344',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAgvD6vRM1zsN5TxVMfptIhaN2JVAuJMRJXWNaqlon+WfimUdMST0flTHpLO83bXL5WwY2A5WI9v+GJjfdNpaFNJ2G1JmwD5iQ9Ta40LrOC0/b2Y6WslCswJWuKILaX98b+12p62ol8DeLOaIZe/CfkuXG/w8GaGMPYlkUmbXi98+gKI7c0u4VU3Ea5NLny7XbPvXB2OWUVakONJcQuNI/Fr7WelqGt7cnYFPc7FZjX69oC16rw7giUuM2tB49SXoLAaNpYLwNctrLimI3o/PCgjYSTAOKvE2P7nWbzTaOGC+6ZzaNBmOjVAejap9UjJG8zltcHFmDTDQOdn9JhGM1xwIDAQAB',
        'private_key'    => 'MIIEpAIBAAKCAQEAj9j29jodrT79kfhv7CAdzQxyPEV8ExKikOfAujqBjrbTWmVhv0iy+08e7a8pxK4weRyaQ2OIk4E6qbWJLbpngqyDk498wOsx4zpqw9sirV7Y4qbe4ff6aqKQz/IRalGkli/L6O+Zsj+f/sjoLY30tfSww8Fa/XTBQhWRgyO8Ct6GB7RSp2scwHXVzabSI5w5Dqorc6osLSQimqEGwB/0QLsMOx2oiK7gDrCnfY0M/avM5tWPrsUa3ECY3yqQP9PieRGo/6PabrL4zQp+8QLWuKs+rqow3ILXeWWJRo5GHK2Bh/k8rmH4Sq224M70HNcKygkC/N0nVi99YgOnvn4mOwIDAQABAoIBACiKNx+xxUdcJ06KO9DKRFvTlCZUVuFxMQuxpOlXL8gu0mX5iJDGRlr5M3g9E4JwrQyU+Qzg8k7P7t6BYQXYMO/s+rANklU0c7zca9aC3cUKpAlMiigZISQIaNOSH0JdfAsvsUIWtLQ9pjPCH10nUr4tFdw1lBU2YHjlZzsUSRyuqUvy7tfF4M5L0TPq2+fggmU/NyPtHA6l2ojTtrz++amwJNPrxwIhTYdCUOT6k4+KbvTcp5JTylTtbNsTgaLgf8Zfdh1qqYP+LxGIYLIq/rljOGT5hmztq9L56zP24EIlIk01No4ceGk1dFtwE4mxczLuymJQlEC8j2A4hNMa8TECgYEA1N/Q0rEL5M80kJL0neBADBF20ERu16qRkh6HNeEvaWac9Nxb4zDppmb6J6AA9dkRw42wWH0Dru5ZKlxGpimh44RW8dDXG70tv0s5dsGwECwu1vyGXlm0kls4qBQgvpTop08Rm1iZE7327v2QNKVgZ7H9FkRW5GWr7APMQ7Z+va0CgYEArP1ATCukGKS1rSE/al0UPKeTtS10RL2JGGO7INXEn7BRSL1b6ZMy+dWe0u0bF/kUlSAaCcY8b8XElwERz1S7LSBfSUIjVMqjs96wNSPhBoXOWaqg9idFWO3coD/JwLtIRQ2HXBksWN6vjT8FqFnQ/nSwZpC7ZOEI2NlFCuMMoIcCgYEAlz2U/bwv+RaGABmIlgpXNrvJsFqObcePuULbSZp9tuLirM1Ks3Vy63jKThDN3d2lU0x9d8EKNuS8kO4Se8ekbyL9Krz3t4uGzxxA7XDbCAJ8HN45ERumwTzyWehDA2SEjyoMFlSyHWaf5Fhedijw/3tjlshi+86IgRyJqaolDdkCgYEApWEf3TJDmQOuZCvK8qa1uB8FCUrBQw5oSJbfyU5Uwc3Qh9fwTOda7poZUtE2+742vTKJchrAoKLThQGSw0HgCA5QyjqeiGuKAWW906/Pa2r0kaicZXe5xoDwUYtqGAVz3ABJDfVK/lM2RbSgdggX04w/MG7hmFnDGXztkrDp23UCgYBk64ox+aLc68ZmraCfRA9YPMsFixRwmo3AO196PLYHDKMyDdPg6YJiexyS1hSuecPnO2AhSk6KmZu/o9LDNNgsQXZKuo0GGGegNnFaAg7ggEpF6pPka3i1MfYzEKNgIW6OY3yNVkktjUKpguGuTjcpafs+PmxyBZjzZXg+TZom+Q==',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
