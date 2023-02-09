<?php
    date_default_timezone_set('Asia/Jakarta');

    $key = "MIICXAIBAAKBgQCkvumOPUhDO7jz6RhQjiG5HToFTwHejDPRMnmbT551DUez4/tx
zlLrQst9wQd+/niqjF1wg6csqJFiN2OyGmXHH1iU73bxarUg8xKWsuoQsP40k0In
E7ub+dQmmD7rHen1w/hq5nMgorcfHvxU7ghl7239DTRVXhn6qrGA7+ZbGQIDAQAB
AoGAWjopBfrwOcpauFNAOtYtCApGvaOQvYcB1iAT1AjeGvNkAtTo4GKErU6OzlfK
uDW8doObpUSlaWMFBMqbMm8cr/muBtw/kYNJLAUPgjvD5uIfc9igKrVJxxxFWL3K
UJBZf8CztQMyrojWODTUbF/CAGO/5dJ+9LFgTO8E8HceRwECQQDRtT2YKKpznRNg
it40kteJWgGNiiqTsoKFForObvcks00XgcAT+mWirVjaGCB4Ebng9xTdgj2R/faA
hmlpUEt5AkEAyRzSa917Pv88ztn5uxXsHlwgpiGihdZ4sYMGDwuVb+bedtFzCK3p
L28jeUm7Xf07lsD1KhAPTrdiYVhDtcEEoQJBAKdiOJW478R0PcEzVoU0J+Gz+8VT
4QQe2dsM0SJQo+ehTglTQVMw6+ra3i7GTzRHQcx0qyzbBfX/db/EiWLL+lECQDED
WTT4kWTVB5jR/s7dlOIBSeOzJsy/bEK2z+8yv4S6G1WRzhs7Zy0sRNT2ZzeM08z1
0coih9iDUPKwdDADjoECQGUDd5xBv0YVwbgGeSue7ngL9M78/4fAKkrq1+IDs9Z6
VRazK0GZStg+/uea8slUzE13TFaSZqEq+xV/la01ku4=";
    $issued_at = time();
    $expiration_time = $issued_at+(60*60);
    $issuer = "RestApiAuthJWT";
