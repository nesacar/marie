---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.
[Get Postman Collection](http://localhost/docs/collection.json)

<!-- END_INFO -->

#general
<!-- START_70770215f61dc5ba432ce0bbaf035224 -->
## Display a listing of Banner model

> Example request:

```bash
curl -X GET "http://localhost/api/banners/lists" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/banners/lists",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "banners": [
        {
            "id": 1,
            "title": "Prolećni",
            "link": "https:\/\/www.google.rs\/",
            "image": "storage\/uploads\/banners\/08-2018\/prolecni-1-7v.jpg",
            "width": 600,
            "height": 180,
            "is_visible": 1,
            "created_at": "2018-08-11 19:38:36",
            "updated_at": "2018-08-11 19:38:37"
        }
    ]
}
```

### HTTP Request
`GET api/banners/lists`

`HEAD api/banners/lists`


<!-- END_70770215f61dc5ba432ce0bbaf035224 -->

<!-- START_43c9c3f2bead9b00188e5f7875d45283 -->
## Display a listing of Banner model

> Example request:

```bash
curl -X GET "http://localhost/api/banners" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/banners",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/banners`

`HEAD api/banners`


<!-- END_43c9c3f2bead9b00188e5f7875d45283 -->

<!-- START_b5088194b231a9a0f070e1c714c40ab3 -->
## method used to store a newly created Banner model

> Example request:

```bash
curl -X POST "http://localhost/api/banners" \
-H "Accept: application/json" \
    -d "title"="minima" \
    -d "link"="minima" \
    -d "image"="minima" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/banners",
    "method": "POST",
    "data": {
        "title": "minima",
        "link": "minima",
        "image": "minima"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/banners`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    link | string |  required  | 
    image | image |  required  | Must be an image (jpeg, png, bmp, gif, or svg) Allowed mime types: `jpg`, `gif`, `jpeg` or `png`

<!-- END_b5088194b231a9a0f070e1c714c40ab3 -->

<!-- START_ef36288860667de3efbbb80441281732 -->
## method used to display the specified Banner model

> Example request:

```bash
curl -X GET "http://localhost/api/banners/{banner}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/banners/{banner}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/banners/{banner}`

`HEAD api/banners/{banner}`


<!-- END_ef36288860667de3efbbb80441281732 -->

<!-- START_58c53cbd26b801d7a0d93df614864ce6 -->
## method used to update the specified Banner model

> Example request:

```bash
curl -X PUT "http://localhost/api/banners/{banner}" \
-H "Accept: application/json" \
    -d "title"="voluptatem" \
    -d "link"="voluptatem" \
    -d "image"="voluptatem" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/banners/{banner}",
    "method": "PUT",
    "data": {
        "title": "voluptatem",
        "link": "voluptatem",
        "image": "voluptatem"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/banners/{banner}`

`PATCH api/banners/{banner}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    link | string |  required  | 
    image | image |  required  | Must be an image (jpeg, png, bmp, gif, or svg) Allowed mime types: `jpg`, `gif`, `jpeg` or `png`

<!-- END_58c53cbd26b801d7a0d93df614864ce6 -->

<!-- START_1bcf84fe4fdbd803c9745dc283512cac -->
## method used to remove the specified Banner model

> Example request:

```bash
curl -X DELETE "http://localhost/api/banners/{banner}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/banners/{banner}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/banners/{banner}`


<!-- END_1bcf84fe4fdbd803c9745dc283512cac -->

<!-- START_1e3b006e685a417da3d5889595a9bcaf -->
## Display a listing of BeautyBox model

> Example request:

```bash
curl -X GET "http://localhost/api/beauty-boxes" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/beauty-boxes",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/beauty-boxes`

`HEAD api/beauty-boxes`


<!-- END_1e3b006e685a417da3d5889595a9bcaf -->

<!-- START_9412e37a0ade060d74442cea2cd54880 -->
## method used to store a newly created BeautyBox model

> Example request:

```bash
curl -X POST "http://localhost/api/beauty-boxes" \
-H "Accept: application/json" \
    -d "title"="voluptatem" \
    -d "slug"="voluptatem" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/beauty-boxes",
    "method": "POST",
    "data": {
        "title": "voluptatem",
        "slug": "voluptatem"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/beauty-boxes`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 

<!-- END_9412e37a0ade060d74442cea2cd54880 -->

<!-- START_42264516a47c39342f509feab3644564 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/beauty-boxes/{beauty_box}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/beauty-boxes/{beauty_box}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/beauty-boxes/{beauty_box}`

`HEAD api/beauty-boxes/{beauty_box}`


<!-- END_42264516a47c39342f509feab3644564 -->

<!-- START_2d05aa2201d07a24af9aab151ae846a5 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/beauty-boxes/{beauty_box}" \
-H "Accept: application/json" \
    -d "title"="voluptatum" \
    -d "slug"="voluptatum" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/beauty-boxes/{beauty_box}",
    "method": "PUT",
    "data": {
        "title": "voluptatum",
        "slug": "voluptatum"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/beauty-boxes/{beauty_box}`

`PATCH api/beauty-boxes/{beauty_box}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 

<!-- END_2d05aa2201d07a24af9aab151ae846a5 -->

<!-- START_e8a60add8327c69077388d51707ade1d -->
## method used to remove the specified BeautyBox model

> Example request:

```bash
curl -X DELETE "http://localhost/api/beauty-boxes/{beauty_box}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/beauty-boxes/{beauty_box}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/beauty-boxes/{beauty_box}`


<!-- END_e8a60add8327c69077388d51707ade1d -->

<!-- START_dd2bad12861590c47f36b6fb11f6b850 -->
## method used to return list of brands

> Example request:

```bash
curl -X GET "http://localhost/api/brands/lists" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/brands/lists",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/brands/lists`

`HEAD api/brands/lists`


<!-- END_dd2bad12861590c47f36b6fb11f6b850 -->

<!-- START_cbb0297b2a5ede5173927539b8d11f78 -->
## method used to show brands paginate by 50

> Example request:

```bash
curl -X GET "http://localhost/api/brands" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/brands",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/brands`

`HEAD api/brands`


<!-- END_cbb0297b2a5ede5173927539b8d11f78 -->

<!-- START_745f1520c22769b1767899facf665d2b -->
## method used to store new brand and return

> Example request:

```bash
curl -X POST "http://localhost/api/brands" \
-H "Accept: application/json" \
    -d "title"="qui" \
    -d "slug"="qui" \
    -d "image"="qui" \
    -d "logo"="qui" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/brands",
    "method": "POST",
    "data": {
        "title": "qui",
        "slug": "qui",
        "image": "qui",
        "logo": "qui"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/brands`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 
    image | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg) Allowed mime types: `jpg`, `jpeg`, `png` or `gif`
    logo | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg) Allowed mime types: `jpg`, `jpeg`, `png` or `gif`

<!-- END_745f1520c22769b1767899facf665d2b -->

<!-- START_294252b99ced09cfc6dc614f225930a5 -->
## method used to return brand

> Example request:

```bash
curl -X GET "http://localhost/api/brands/{brand}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/brands/{brand}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/brands/{brand}`

`HEAD api/brands/{brand}`


<!-- END_294252b99ced09cfc6dc614f225930a5 -->

<!-- START_042c9bfce86a99d5c778f8e02c29a5d7 -->
## method used to update brand and return

> Example request:

```bash
curl -X PUT "http://localhost/api/brands/{brand}" \
-H "Accept: application/json" \
    -d "title"="omnis" \
    -d "slug"="omnis" \
    -d "image"="omnis" \
    -d "logo"="omnis" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/brands/{brand}",
    "method": "PUT",
    "data": {
        "title": "omnis",
        "slug": "omnis",
        "image": "omnis",
        "logo": "omnis"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/brands/{brand}`

`PATCH api/brands/{brand}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 
    image | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg) Allowed mime types: `jpg`, `jpeg`, `png` or `gif`
    logo | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg) Allowed mime types: `jpg`, `jpeg`, `png` or `gif`

<!-- END_042c9bfce86a99d5c778f8e02c29a5d7 -->

<!-- START_6bc624c1de327f8a14d11df082f18630 -->
## method used to destroy brand

> Example request:

```bash
curl -X DELETE "http://localhost/api/brands/{brand}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/brands/{brand}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/brands/{brand}`


<!-- END_6bc624c1de327f8a14d11df082f18630 -->

<!-- START_fb3c8c8e8056eb4362147894ed94b623 -->
## method used to return tree of blogs

> Example request:

```bash
curl -X GET "http://localhost/api/blogs/tree" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blogs/tree",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/blogs/tree`

`HEAD api/blogs/tree`


<!-- END_fb3c8c8e8056eb4362147894ed94b623 -->

<!-- START_4d74b8a9fd93a99a5d28c058bca01e85 -->
## method used to return list of blogs

> Example request:

```bash
curl -X GET "http://localhost/api/blogs/lists" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blogs/lists",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/blogs/lists`

`HEAD api/blogs/lists`


<!-- END_4d74b8a9fd93a99a5d28c058bca01e85 -->

<!-- START_efd74dc93d3a7964ad2b10ca86920728 -->
## method used to show blogs paginate by 50

> Example request:

```bash
curl -X GET "http://localhost/api/blogs" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blogs",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/blogs`

`HEAD api/blogs`


<!-- END_efd74dc93d3a7964ad2b10ca86920728 -->

<!-- START_96616c9f5e52ee9fb0c4c2ddafa4c556 -->
## method used to store new blog and return

> Example request:

```bash
curl -X POST "http://localhost/api/blogs" \
-H "Accept: application/json" \
    -d "title"="dicta" \
    -d "slug"="dicta" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blogs",
    "method": "POST",
    "data": {
        "title": "dicta",
        "slug": "dicta"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/blogs`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 

<!-- END_96616c9f5e52ee9fb0c4c2ddafa4c556 -->

<!-- START_5a31167a94ec8b7e2c1079c0afbc4d24 -->
## method used to return blog

> Example request:

```bash
curl -X GET "http://localhost/api/blogs/{blog}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blogs/{blog}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/blogs/{blog}`

`HEAD api/blogs/{blog}`


<!-- END_5a31167a94ec8b7e2c1079c0afbc4d24 -->

<!-- START_924617d3477a2230aa73ee1132a2467e -->
## method used to update blog and return

> Example request:

```bash
curl -X PUT "http://localhost/api/blogs/{blog}" \
-H "Accept: application/json" \
    -d "title"="perferendis" \
    -d "slug"="perferendis" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blogs/{blog}",
    "method": "PUT",
    "data": {
        "title": "perferendis",
        "slug": "perferendis"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/blogs/{blog}`

`PATCH api/blogs/{blog}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 

<!-- END_924617d3477a2230aa73ee1132a2467e -->

<!-- START_2f8dc20dd9be9e38ff5d40cced9833e8 -->
## method used to destroy blog

> Example request:

```bash
curl -X DELETE "http://localhost/api/blogs/{blog}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/blogs/{blog}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/blogs/{blog}`


<!-- END_2f8dc20dd9be9e38ff5d40cced9833e8 -->

<!-- START_7ec0e13f01e22fb12992f3b5dda11140 -->
## method used to return tree of categories

> Example request:

```bash
curl -X GET "http://localhost/api/categories/tree" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/categories/tree",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/categories/tree`

`HEAD api/categories/tree`


<!-- END_7ec0e13f01e22fb12992f3b5dda11140 -->

<!-- START_2c71415fe6d459fe97ae7861fdd36c05 -->
## method used to return tree of categories

> Example request:

```bash
curl -X GET "http://localhost/api/categories/sort" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/categories/sort",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/categories/sort`

`HEAD api/categories/sort`


<!-- END_2c71415fe6d459fe97ae7861fdd36c05 -->

<!-- START_3beaa7196864c4b5eb98eeecd79da83f -->
## method used to return list of categories

> Example request:

```bash
curl -X GET "http://localhost/api/categories/lists" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/categories/lists",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/categories/lists`

`HEAD api/categories/lists`


<!-- END_3beaa7196864c4b5eb98eeecd79da83f -->

<!-- START_7ae9e730af967091c12e71699bad1fd5 -->
## method used to save category sort order

> Example request:

```bash
curl -X POST "http://localhost/api/categories/order" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/categories/order",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/categories/order`


<!-- END_7ae9e730af967091c12e71699bad1fd5 -->

<!-- START_51e581cc9a1f9ee73cc207ec4e67e8d4 -->
## method used to show categories paginate by 50

> Example request:

```bash
curl -X GET "http://localhost/api/categories" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/categories",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/categories`

`HEAD api/categories`


<!-- END_51e581cc9a1f9ee73cc207ec4e67e8d4 -->

<!-- START_2335abbed7f782ea7d7dd6df9c738d74 -->
## method used to store new category and return

> Example request:

```bash
curl -X POST "http://localhost/api/categories" \
-H "Accept: application/json" \
    -d "title"="praesentium" \
    -d "slug"="praesentium" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/categories",
    "method": "POST",
    "data": {
        "title": "praesentium",
        "slug": "praesentium"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/categories`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 

<!-- END_2335abbed7f782ea7d7dd6df9c738d74 -->

<!-- START_c3e1c84c6b0ff14496d71900bd82f60c -->
## method used to return category

> Example request:

```bash
curl -X GET "http://localhost/api/categories/{category}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/categories/{category}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/categories/{category}`

`HEAD api/categories/{category}`


<!-- END_c3e1c84c6b0ff14496d71900bd82f60c -->

<!-- START_549109b98c9f25ebff47fb4dc23423b6 -->
## method used to update blog and return

> Example request:

```bash
curl -X PUT "http://localhost/api/categories/{category}" \
-H "Accept: application/json" \
    -d "title"="harum" \
    -d "slug"="harum" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/categories/{category}",
    "method": "PUT",
    "data": {
        "title": "harum",
        "slug": "harum"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/categories/{category}`

`PATCH api/categories/{category}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 

<!-- END_549109b98c9f25ebff47fb4dc23423b6 -->

<!-- START_7513823f87b59040507bd5ab26f9ceb5 -->
## method used to destroy category

> Example request:

```bash
curl -X DELETE "http://localhost/api/categories/{category}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/categories/{category}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/categories/{category}`


<!-- END_7513823f87b59040507bd5ab26f9ceb5 -->

<!-- START_b3b4f2aad76e353279b7bce8fe32ee79 -->
## method used to return count post for newsletter

> Example request:

```bash
curl -X GET "http://localhost/api/clicks/{newsletter_id}/posts/{post_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/clicks/{newsletter_id}/posts/{post_id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/clicks/{newsletter_id}/posts/{post_id}`

`HEAD api/clicks/{newsletter_id}/posts/{post_id}`


<!-- END_b3b4f2aad76e353279b7bce8fe32ee79 -->

<!-- START_070f32be9f6908cd4be618d755ecfbdd -->
## method used to return count banner for newsletter

> Example request:

```bash
curl -X GET "http://localhost/api/clicks/{newsletter_id}/banners/{banner_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/clicks/{newsletter_id}/banners/{banner_id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/clicks/{newsletter_id}/banners/{banner_id}`

`HEAD api/clicks/{newsletter_id}/banners/{banner_id}`


<!-- END_070f32be9f6908cd4be618d755ecfbdd -->

<!-- START_263762c8fca093b693e55347bfdeaed8 -->
## method used to return post clicks for newsletter

> Example request:

```bash
curl -X GET "http://localhost/api/clicks/{newsletter_id}/posts/{post_id}/clicks" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/clicks/{newsletter_id}/posts/{post_id}/clicks",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/clicks/{newsletter_id}/posts/{post_id}/clicks`

`HEAD api/clicks/{newsletter_id}/posts/{post_id}/clicks`


<!-- END_263762c8fca093b693e55347bfdeaed8 -->

<!-- START_2e699b34fe7c8e902078d8a1100f2603 -->
## method used to return count banner clicks for newsletter

> Example request:

```bash
curl -X GET "http://localhost/api/clicks/{newsletter_id}/banners/{banner_id}/clicks" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/clicks/{newsletter_id}/banners/{banner_id}/clicks",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/clicks/{newsletter_id}/banners/{banner_id}/clicks`

`HEAD api/clicks/{newsletter_id}/banners/{banner_id}/clicks`


<!-- END_2e699b34fe7c8e902078d8a1100f2603 -->

<!-- START_bf3c3d772641c14b5330c3d3295dd22f -->
## method used to return post with gallery images

> Example request:

```bash
curl -X GET "http://localhost/api/galleries/{post_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/galleries/{post_id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/galleries/{post_id}`

`HEAD api/galleries/{post_id}`


<!-- END_bf3c3d772641c14b5330c3d3295dd22f -->

<!-- START_ac817acdad4492d43a1f262f22ba29b2 -->
## method used to store gallery images related to post model

> Example request:

```bash
curl -X POST "http://localhost/api/galleries/{post_id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/galleries/{post_id}",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/galleries/{post_id}`


<!-- END_ac817acdad4492d43a1f262f22ba29b2 -->

<!-- START_79c27695098f3be8ac13c3c8d487c493 -->
## api/galleries/{post_id}/serialize

> Example request:

```bash
curl -X POST "http://localhost/api/galleries/{post_id}/serialize" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/galleries/{post_id}/serialize",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/galleries/{post_id}/serialize`


<!-- END_79c27695098f3be8ac13c3c8d487c493 -->

<!-- START_86cf1500931722041da36194c8675b02 -->
## method used to remove gallery image

> Example request:

```bash
curl -X POST "http://localhost/api/galleries/{id}/destroy" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/galleries/{id}/destroy",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/galleries/{id}/destroy`


<!-- END_86cf1500931722041da36194c8675b02 -->

<!-- START_80e36b6c37632f91c377d75e5b98e7b9 -->
## Display a listing of Menu model

> Example request:

```bash
curl -X GET "http://localhost/api/menus" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menus",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/menus`

`HEAD api/menus`


<!-- END_80e36b6c37632f91c377d75e5b98e7b9 -->

<!-- START_07bacc117eab82907c40d165db130677 -->
## store a newly created Menu model

> Example request:

```bash
curl -X POST "http://localhost/api/menus" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menus",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/menus`


<!-- END_07bacc117eab82907c40d165db130677 -->

<!-- START_6ea2170609c94a7e592888456810aa42 -->
## Display the specified Menu model

> Example request:

```bash
curl -X GET "http://localhost/api/menus/{menu}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menus/{menu}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/menus/{menu}`

`HEAD api/menus/{menu}`


<!-- END_6ea2170609c94a7e592888456810aa42 -->

<!-- START_11b21bf9dff6f2b5f9945c9d52074beb -->
## Update the specified Menu model

> Example request:

```bash
curl -X PUT "http://localhost/api/menus/{menu}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menus/{menu}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/menus/{menu}`

`PATCH api/menus/{menu}`


<!-- END_11b21bf9dff6f2b5f9945c9d52074beb -->

<!-- START_1358b72d79a29722b951d26536170549 -->
## Remove the specified Menu model

> Example request:

```bash
curl -X DELETE "http://localhost/api/menus/{menu}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menus/{menu}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/menus/{menu}`


<!-- END_1358b72d79a29722b951d26536170549 -->

<!-- START_905ee6ae45b97b577142d45772af8815 -->
## method used to return lists of MenuLink model

> Example request:

```bash
curl -X GET "http://localhost/api/menu-links/lists" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menu-links/lists",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/menu-links/lists`

`HEAD api/menu-links/lists`


<!-- END_905ee6ae45b97b577142d45772af8815 -->

<!-- START_5ffba42cc0e92898e6ae1189cc90ffd4 -->
## method used to display a listing of MenuLink model

> Example request:

```bash
curl -X GET "http://localhost/api/menu-links" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menu-links",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/menu-links`

`HEAD api/menu-links`


<!-- END_5ffba42cc0e92898e6ae1189cc90ffd4 -->

<!-- START_b933a5cece18335bb0603a12d70f737f -->
## method used to store a newly created MenuLink model

> Example request:

```bash
curl -X POST "http://localhost/api/menu-links" \
-H "Accept: application/json" \
    -d "title"="accusamus" \
    -d "link"="accusamus" \
    -d "order"="80468139" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menu-links",
    "method": "POST",
    "data": {
        "title": "accusamus",
        "link": "accusamus",
        "order": 80468139
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/menu-links`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    link | string |  required  | 
    order | numeric |  required  | 

<!-- END_b933a5cece18335bb0603a12d70f737f -->

<!-- START_270afc1f677bcaac23276bb7d87eee17 -->
## method used to display the specified MenuLink model

> Example request:

```bash
curl -X GET "http://localhost/api/menu-links/{menu_link}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menu-links/{menu_link}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/menu-links/{menu_link}`

`HEAD api/menu-links/{menu_link}`


<!-- END_270afc1f677bcaac23276bb7d87eee17 -->

<!-- START_e17cbe1c0909f10e2c5c8c6dba8476e3 -->
## method used to update the specified MenuLink model

> Example request:

```bash
curl -X PUT "http://localhost/api/menu-links/{menu_link}" \
-H "Accept: application/json" \
    -d "title"="possimus" \
    -d "link"="possimus" \
    -d "order"="3026274" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menu-links/{menu_link}",
    "method": "PUT",
    "data": {
        "title": "possimus",
        "link": "possimus",
        "order": 3026274
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/menu-links/{menu_link}`

`PATCH api/menu-links/{menu_link}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    link | string |  required  | 
    order | numeric |  required  | 

<!-- END_e17cbe1c0909f10e2c5c8c6dba8476e3 -->

<!-- START_37202c4184e0cba1cd1e7b963f058a7d -->
## method used to remove the specified MenuLink model

> Example request:

```bash
curl -X DELETE "http://localhost/api/menu-links/{menu_link}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menu-links/{menu_link}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/menu-links/{menu_link}`


<!-- END_37202c4184e0cba1cd1e7b963f058a7d -->

<!-- START_d14818d3d6bdc71e958406ad80918b96 -->
## method used to sort the specified MenuLink model

> Example request:

```bash
curl -X GET "http://localhost/api/menu-links/{id}/sort" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menu-links/{id}/sort",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/menu-links/{id}/sort`

`HEAD api/menu-links/{id}/sort`


<!-- END_d14818d3d6bdc71e958406ad80918b96 -->

<!-- START_5148320226bdc6426dad6d6fe17f69d5 -->
## method used to save order of list MenuLink model

> Example request:

```bash
curl -X POST "http://localhost/api/menu-links/{id}/order" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/menu-links/{id}/order",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/menu-links/{id}/order`


<!-- END_5148320226bdc6426dad6d6fe17f69d5 -->

<!-- START_139f17caa16b8634689b01592ef3f8f2 -->
## Display a listing of Newsletter model

> Example request:

```bash
curl -X GET "http://localhost/api/newsletters" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/newsletters",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/newsletters`

`HEAD api/newsletters`


<!-- END_139f17caa16b8634689b01592ef3f8f2 -->

<!-- START_d1111200c2611b73db51520ede980257 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/newsletters" \
-H "Accept: application/json" \
    -d "title"="rerum" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/newsletters",
    "method": "POST",
    "data": {
        "title": "rerum"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/newsletters`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 

<!-- END_d1111200c2611b73db51520ede980257 -->

<!-- START_1fff62c103036890fdd1c201b5c1607b -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/newsletters/{newsletter}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/newsletters/{newsletter}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/newsletters/{newsletter}`

`HEAD api/newsletters/{newsletter}`


<!-- END_1fff62c103036890fdd1c201b5c1607b -->

<!-- START_4cd3a753a0a1a24a9353591f3b462c15 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/newsletters/{newsletter}" \
-H "Accept: application/json" \
    -d "title"="minus" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/newsletters/{newsletter}",
    "method": "PUT",
    "data": {
        "title": "minus"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/newsletters/{newsletter}`

`PATCH api/newsletters/{newsletter}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 

<!-- END_4cd3a753a0a1a24a9353591f3b462c15 -->

<!-- START_eb780218b9ff1b38753b01c53592d05c -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/newsletters/{newsletter}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/newsletters/{newsletter}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/newsletters/{newsletter}`


<!-- END_eb780218b9ff1b38753b01c53592d05c -->

<!-- START_8528b100646a355a4401fc5f99c4ccd6 -->
## Display a specific post

> Example request:

```bash
curl -X GET "http://localhost/api/newsletters/{id}/post" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/newsletters/{id}/post",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/newsletters/{id}/post`

`HEAD api/newsletters/{id}/post`


<!-- END_8528b100646a355a4401fc5f99c4ccd6 -->

<!-- START_67b03613f095a7d83acfc5ee12501189 -->
## Display a specific post

> Example request:

```bash
curl -X GET "http://localhost/api/newsletters/{id}/banner" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/newsletters/{id}/banner",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/newsletters/{id}/banner`

`HEAD api/newsletters/{id}/banner`


<!-- END_67b03613f095a7d83acfc5ee12501189 -->

<!-- START_f43c6e4e7167c0048025117a62d57ce7 -->
## method used to prepare newsletter sending

> Example request:

```bash
curl -X POST "http://localhost/api/newsletters/{id}/prepare" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/newsletters/{id}/prepare",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/newsletters/{id}/prepare`


<!-- END_f43c6e4e7167c0048025117a62d57ce7 -->

<!-- START_e9bf18c7618cb80fd4ecdfaf7f6c3b29 -->
## method used to send newsletter

> Example request:

```bash
curl -X POST "http://localhost/api/newsletters/{id}/send" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/newsletters/{id}/send",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/newsletters/{id}/send`


<!-- END_e9bf18c7618cb80fd4ecdfaf7f6c3b29 -->

<!-- START_e18652c2af7f06f04d110b1af8233b52 -->
## method used to return list of partners

> Example request:

```bash
curl -X GET "http://localhost/api/partners/lists" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/partners/lists",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/partners/lists`

`HEAD api/partners/lists`


<!-- END_e18652c2af7f06f04d110b1af8233b52 -->

<!-- START_d8f1e9102c056fc72bb63bb7481af89a -->
## Display a listing of Partner model

> Example request:

```bash
curl -X GET "http://localhost/api/partners" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/partners",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET api/partners`

`HEAD api/partners`


<!-- END_d8f1e9102c056fc72bb63bb7481af89a -->

<!-- START_a85c461b6a4e4b19c1efa74da0b7eaca -->
## method used to store a newly created Partner model

> Example request:

```bash
curl -X POST "http://localhost/api/partners" \
-H "Accept: application/json" \
    -d "title"="molestiae" \
    -d "slug"="molestiae" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/partners",
    "method": "POST",
    "data": {
        "title": "molestiae",
        "slug": "molestiae"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/partners`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 

<!-- END_a85c461b6a4e4b19c1efa74da0b7eaca -->

<!-- START_df0d68c3dcc09fd5bf28d0f51dac6973 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/partners/{partner}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/partners/{partner}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/partners/{partner}`

`HEAD api/partners/{partner}`


<!-- END_df0d68c3dcc09fd5bf28d0f51dac6973 -->

<!-- START_fb17e0239eeddf4ae1a40de4efd638be -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/partners/{partner}" \
-H "Accept: application/json" \
    -d "title"="et" \
    -d "slug"="et" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/partners/{partner}",
    "method": "PUT",
    "data": {
        "title": "et",
        "slug": "et"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/partners/{partner}`

`PATCH api/partners/{partner}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 

<!-- END_fb17e0239eeddf4ae1a40de4efd638be -->

<!-- START_637274a85eaf20a1a76d75a2d2e87e71 -->
## method used to remove the specified Partner model

> Example request:

```bash
curl -X DELETE "http://localhost/api/partners/{partner}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/partners/{partner}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/partners/{partner}`


<!-- END_637274a85eaf20a1a76d75a2d2e87e71 -->

<!-- START_be4838d817ca0dcbda905d3e97b3ed94 -->
## method used to return lists of Permission model

> Example request:

```bash
curl -X GET "http://localhost/api/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/permissions",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/permissions`

`HEAD api/permissions`


<!-- END_be4838d817ca0dcbda905d3e97b3ed94 -->

<!-- START_d513e82f79d47649a14d2e59fda93073 -->
## method used to store new Permission model

> Example request:

```bash
curl -X POST "http://localhost/api/permissions" \
-H "Accept: application/json" \
    -d "permission_group_id"="43" \
    -d "name"="neque" \
    -d "guard_name"="neque" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/permissions",
    "method": "POST",
    "data": {
        "permission_group_id": 43,
        "name": "neque",
        "guard_name": "neque"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/permissions`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    permission_group_id | numeric |  required  | 
    name | string |  required  | 
    guard_name | string |  required  | 

<!-- END_d513e82f79d47649a14d2e59fda93073 -->

<!-- START_eb587fdee0d7d9067d7cbc4910720b9c -->
## method used to return Permission model

> Example request:

```bash
curl -X GET "http://localhost/api/permissions/{permission}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/permissions/{permission}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/permissions/{permission}`

`HEAD api/permissions/{permission}`


<!-- END_eb587fdee0d7d9067d7cbc4910720b9c -->

<!-- START_cbdd1fce06181b5d5d8d0f3ae85ed0ee -->
## method used to update Permission model

> Example request:

```bash
curl -X PUT "http://localhost/api/permissions/{permission}" \
-H "Accept: application/json" \
    -d "permission_group_id"="823" \
    -d "name"="quaerat" \
    -d "guard_name"="quaerat" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/permissions/{permission}",
    "method": "PUT",
    "data": {
        "permission_group_id": 823,
        "name": "quaerat",
        "guard_name": "quaerat"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/permissions/{permission}`

`PATCH api/permissions/{permission}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    permission_group_id | numeric |  required  | 
    name | string |  required  | 
    guard_name | string |  required  | 

<!-- END_cbdd1fce06181b5d5d8d0f3ae85ed0ee -->

<!-- START_58309983000c47ce901812498144165a -->
## method used to destroy Permission model

> Example request:

```bash
curl -X DELETE "http://localhost/api/permissions/{permission}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/permissions/{permission}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/permissions/{permission}`


<!-- END_58309983000c47ce901812498144165a -->

<!-- START_3dc40d3b1d9963c296ad45d5c0abeb1c -->
## method used to return list of permission_groups

> Example request:

```bash
curl -X GET "http://localhost/api/permission-groups/lists" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/permission-groups/lists",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/permission-groups/lists`

`HEAD api/permission-groups/lists`


<!-- END_3dc40d3b1d9963c296ad45d5c0abeb1c -->

<!-- START_9ec9d35aea2b84ddfc5196ede6dcba2c -->
## method used to return lists of PermissionGroup model

> Example request:

```bash
curl -X GET "http://localhost/api/permission-groups" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/permission-groups",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/permission-groups`

`HEAD api/permission-groups`


<!-- END_9ec9d35aea2b84ddfc5196ede6dcba2c -->

<!-- START_d8be0d717114b01beeb0b650a225a53e -->
## method used to store new PermissionGroup model

> Example request:

```bash
curl -X POST "http://localhost/api/permission-groups" \
-H "Accept: application/json" \
    -d "name"="quae" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/permission-groups",
    "method": "POST",
    "data": {
        "name": "quae"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/permission-groups`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 

<!-- END_d8be0d717114b01beeb0b650a225a53e -->

<!-- START_182256f857bead8e91af1c55d3498a60 -->
## method used to return PermissionGroup model

> Example request:

```bash
curl -X GET "http://localhost/api/permission-groups/{permission_group}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/permission-groups/{permission_group}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/permission-groups/{permission_group}`

`HEAD api/permission-groups/{permission_group}`


<!-- END_182256f857bead8e91af1c55d3498a60 -->

<!-- START_88ea3f5cb3d1264ad29de770e344d253 -->
## method used to update PermissionGroup model

> Example request:

```bash
curl -X PUT "http://localhost/api/permission-groups/{permission_group}" \
-H "Accept: application/json" \
    -d "name"="consequatur" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/permission-groups/{permission_group}",
    "method": "PUT",
    "data": {
        "name": "consequatur"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/permission-groups/{permission_group}`

`PATCH api/permission-groups/{permission_group}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 

<!-- END_88ea3f5cb3d1264ad29de770e344d253 -->

<!-- START_3e696ad8f8868acce2c0fccc4212696e -->
## method used to destroy PermissionGroup model

> Example request:

```bash
curl -X DELETE "http://localhost/api/permission-groups/{permission_group}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/permission-groups/{permission_group}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/permission-groups/{permission_group}`


<!-- END_3e696ad8f8868acce2c0fccc4212696e -->

<!-- START_cbd19469cc2dc1f5426b92d2353fa15e -->
## Display a listing of Post model

> Example request:

```bash
curl -X GET "http://localhost/api/posts/lists" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/posts/lists",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/posts/lists`

`HEAD api/posts/lists`


<!-- END_cbd19469cc2dc1f5426b92d2353fa15e -->

<!-- START_05bda106aace8bbf6a3ff6f5fdf5353b -->
## Display a listing of Post model

> Example request:

```bash
curl -X GET "http://localhost/api/posts" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/posts",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/posts`

`HEAD api/posts`


<!-- END_05bda106aace8bbf6a3ff6f5fdf5353b -->

<!-- START_ea8d166c68ec035668ea724e12cafa45 -->
## method used to store new post and return

> Example request:

```bash
curl -X POST "http://localhost/api/posts" \
-H "Accept: application/json" \
    -d "title"="modi" \
    -d "slug"="modi" \
    -d "short"="modi" \
    -d "image"="modi" \
    -d "image_box"="modi" \
    -d "blog_ids"="modi" \
    -d "publish_at"="1980-11-02" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/posts",
    "method": "POST",
    "data": {
        "title": "modi",
        "slug": "modi",
        "short": "modi",
        "image": "modi",
        "image_box": "modi",
        "blog_ids": "modi",
        "publish_at": "1980-11-02"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/posts`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 
    short | string |  required  | 
    image | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    image_box | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    blog_ids | string |  required  | 
    publish_at | date |  required  | 

<!-- END_ea8d166c68ec035668ea724e12cafa45 -->

<!-- START_e27323645cb31f0ee2f1fb6e4ccedd09 -->
## method used to return post

> Example request:

```bash
curl -X GET "http://localhost/api/posts/{post}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/posts/{post}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/posts/{post}`

`HEAD api/posts/{post}`


<!-- END_e27323645cb31f0ee2f1fb6e4ccedd09 -->

<!-- START_6d1dfaf5fa710725519375063e4e9db0 -->
## method used to update post and return

> Example request:

```bash
curl -X PUT "http://localhost/api/posts/{post}" \
-H "Accept: application/json" \
    -d "title"="corporis" \
    -d "slug"="corporis" \
    -d "short"="corporis" \
    -d "image"="corporis" \
    -d "image_box"="corporis" \
    -d "blog_ids"="corporis" \
    -d "publish_at"="1984-09-24" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/posts/{post}",
    "method": "PUT",
    "data": {
        "title": "corporis",
        "slug": "corporis",
        "short": "corporis",
        "image": "corporis",
        "image_box": "corporis",
        "blog_ids": "corporis",
        "publish_at": "1984-09-24"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/posts/{post}`

`PATCH api/posts/{post}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 
    short | string |  required  | 
    image | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    image_box | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg)
    blog_ids | string |  required  | 
    publish_at | date |  required  | 

<!-- END_6d1dfaf5fa710725519375063e4e9db0 -->

<!-- START_790d23dbb8c799c36c70f7133a51e7a5 -->
## method used to destroy post

> Example request:

```bash
curl -X DELETE "http://localhost/api/posts/{post}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/posts/{post}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/posts/{post}`


<!-- END_790d23dbb8c799c36c70f7133a51e7a5 -->

<!-- START_5dfb5ee304ae741dfe608bddb26d6267 -->
## method used to search post paginate by 50

> Example request:

```bash
curl -X POST "http://localhost/api/posts/search" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/posts/search",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/posts/search`


<!-- END_5dfb5ee304ae741dfe608bddb26d6267 -->

<!-- START_d6315c0f80fdc5b8b5cafcb7768d054e -->
## Display a listing of Product model

> Example request:

```bash
curl -X GET "http://localhost/api/products" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/products`

`HEAD api/products`


<!-- END_d6315c0f80fdc5b8b5cafcb7768d054e -->

<!-- START_05b4383f00fd57c4828a831e7057e920 -->
## method used to store new product and return

> Example request:

```bash
curl -X POST "http://localhost/api/products" \
-H "Accept: application/json" \
    -d "title"="sed" \
    -d "slug"="sed" \
    -d "link"="sed" \
    -d "brand_id"="sed" \
    -d "gender_id"="sed" \
    -d "category_ids"="sed" \
    -d "image"="sed" \
    -d "price"="254640171" \
    -d "outlet_price"="254640171" \
    -d "code"="sed" \
    -d "publish_at"="1975-10-07" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products",
    "method": "POST",
    "data": {
        "title": "sed",
        "slug": "sed",
        "link": "sed",
        "brand_id": "sed",
        "gender_id": "sed",
        "category_ids": "sed",
        "image": "sed",
        "price": 254640171,
        "outlet_price": 254640171,
        "code": "sed",
        "publish_at": "1975-10-07"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/products`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 
    link | string |  required  | 
    brand_id | string |  required  | 
    gender_id | string |  required  | 
    category_ids | string |  required  | 
    image | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg) Allowed mime types: `jpg`, `jpeg`, `png` or `gif`
    price | numeric |  required  | Minimum: `1`
    outlet_price | numeric |  optional  | Minimum: `0`
    code | string |  required  | 
    publish_at | date |  required  | 

<!-- END_05b4383f00fd57c4828a831e7057e920 -->

<!-- START_963ec11fd78da94f0900b0c6baf959a3 -->
## method used to return product

> Example request:

```bash
curl -X GET "http://localhost/api/products/{product}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products/{product}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/products/{product}`

`HEAD api/products/{product}`


<!-- END_963ec11fd78da94f0900b0c6baf959a3 -->

<!-- START_b7842ce7893c09eb3c53713f82c2e12d -->
## method used to update product and return

> Example request:

```bash
curl -X PUT "http://localhost/api/products/{product}" \
-H "Accept: application/json" \
    -d "title"="est" \
    -d "slug"="est" \
    -d "link"="est" \
    -d "brand_id"="est" \
    -d "gender_id"="est" \
    -d "category_ids"="est" \
    -d "image"="est" \
    -d "price"="1303178685" \
    -d "outlet_price"="1303178685" \
    -d "code"="est" \
    -d "publish_at"="1999-07-02" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products/{product}",
    "method": "PUT",
    "data": {
        "title": "est",
        "slug": "est",
        "link": "est",
        "brand_id": "est",
        "gender_id": "est",
        "category_ids": "est",
        "image": "est",
        "price": 1303178685,
        "outlet_price": 1303178685,
        "code": "est",
        "publish_at": "1999-07-02"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/products/{product}`

`PATCH api/products/{product}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 
    link | string |  required  | 
    brand_id | string |  required  | 
    gender_id | string |  required  | 
    category_ids | string |  required  | 
    image | image |  optional  | Must be an image (jpeg, png, bmp, gif, or svg) Allowed mime types: `jpg`, `jpeg`, `png` or `gif`
    price | numeric |  required  | Minimum: `1`
    outlet_price | numeric |  optional  | Minimum: `0`
    code | string |  required  | 
    publish_at | date |  required  | 

<!-- END_b7842ce7893c09eb3c53713f82c2e12d -->

<!-- START_1d809ca5e8b10fa7fdc75d04506a55ea -->
## method used to destroy product

> Example request:

```bash
curl -X DELETE "http://localhost/api/products/{product}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products/{product}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/products/{product}`


<!-- END_1d809ca5e8b10fa7fdc75d04506a55ea -->

<!-- START_7b1b863a682a5bcb2a423df0d56eec77 -->
## method used to search and return products

> Example request:

```bash
curl -X POST "http://localhost/api/products/search" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/products/search",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/products/search`


<!-- END_7b1b863a682a5bcb2a423df0d56eec77 -->

<!-- START_cf933035f0b7be79537f2c5e6d691147 -->
## method used to return list of roles

> Example request:

```bash
curl -X GET "http://localhost/api/roles/lists" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/roles/lists",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/roles/lists`

`HEAD api/roles/lists`


<!-- END_cf933035f0b7be79537f2c5e6d691147 -->

<!-- START_0a74816f6409e89e5fc8538015f2b907 -->
## method used to return lists of Role model

> Example request:

```bash
curl -X GET "http://localhost/api/roles" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/roles",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/roles`

`HEAD api/roles`


<!-- END_0a74816f6409e89e5fc8538015f2b907 -->

<!-- START_90c780acaefab9740431579512d07101 -->
## method used to store new Role model

> Example request:

```bash
curl -X POST "http://localhost/api/roles" \
-H "Accept: application/json" \
    -d "name"="sint" \
    -d "guard_name"="sint" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/roles",
    "method": "POST",
    "data": {
        "name": "sint",
        "guard_name": "sint"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/roles`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    guard_name | string |  required  | 

<!-- END_90c780acaefab9740431579512d07101 -->

<!-- START_729c0798319f1e2189d3b992301e43c3 -->
## method used to return Role model

> Example request:

```bash
curl -X GET "http://localhost/api/roles/{role}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/roles/{role}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/roles/{role}`

`HEAD api/roles/{role}`


<!-- END_729c0798319f1e2189d3b992301e43c3 -->

<!-- START_cccebfff0074c9c5f499e215eee84e86 -->
## method used to update Role model

> Example request:

```bash
curl -X PUT "http://localhost/api/roles/{role}" \
-H "Accept: application/json" \
    -d "name"="consectetur" \
    -d "guard_name"="consectetur" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/roles/{role}",
    "method": "PUT",
    "data": {
        "name": "consectetur",
        "guard_name": "consectetur"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/roles/{role}`

`PATCH api/roles/{role}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    guard_name | string |  required  | 

<!-- END_cccebfff0074c9c5f499e215eee84e86 -->

<!-- START_9aab750214722ffceebef64f24a2e175 -->
## method used to destroy Role model

> Example request:

```bash
curl -X DELETE "http://localhost/api/roles/{role}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/roles/{role}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/roles/{role}`


<!-- END_9aab750214722ffceebef64f24a2e175 -->

<!-- START_9df85a3a61f6284b75d7a067ff42ff36 -->
## method used to save permissions to current Role model

> Example request:

```bash
curl -X POST "http://localhost/api/roles/{id}/permissions" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/roles/{id}/permissions",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/roles/{id}/permissions`


<!-- END_9df85a3a61f6284b75d7a067ff42ff36 -->

<!-- START_0927faa1882299b356cbab80441e7002 -->
## method used to return Setting model

> Example request:

```bash
curl -X GET "http://localhost/api/settings/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/settings/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/settings/{id}`

`HEAD api/settings/{id}`


<!-- END_0927faa1882299b356cbab80441e7002 -->

<!-- START_4c9e980ab78d77d21000935318ea9cb4 -->
## method used to update Setting model

> Example request:

```bash
curl -X PUT "http://localhost/api/settings/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/settings/{id}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/settings/{id}`


<!-- END_4c9e980ab78d77d21000935318ea9cb4 -->

<!-- START_f2e71ed5b5714dfcedba8f6e5b060da1 -->
## method used to return clicks in last day

> Example request:

```bash
curl -X GET "http://localhost/api/statistics/{id}/day" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/statistics/{id}/day",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/statistics/{id}/day`

`HEAD api/statistics/{id}/day`


<!-- END_f2e71ed5b5714dfcedba8f6e5b060da1 -->

<!-- START_601e6402ce555e640ff14fd21e1ed2be -->
## method used to return clicks in month day

> Example request:

```bash
curl -X GET "http://localhost/api/statistics/{id}/month" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/statistics/{id}/month",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/statistics/{id}/month`

`HEAD api/statistics/{id}/month`


<!-- END_601e6402ce555e640ff14fd21e1ed2be -->

<!-- START_3f7dd891c432d784556c45aa4421f62a -->
## method used to return clicks in last year

> Example request:

```bash
curl -X GET "http://localhost/api/statistics/{id}/year" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/statistics/{id}/year",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/statistics/{id}/year`

`HEAD api/statistics/{id}/year`


<!-- END_3f7dd891c432d784556c45aa4421f62a -->

<!-- START_556ac657c52b7786e2e2e062cbcc8af5 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/subscribers" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/subscribers",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/subscribers`

`HEAD api/subscribers`


<!-- END_556ac657c52b7786e2e2e062cbcc8af5 -->

<!-- START_dc9b4acc1f14d46bcf299d3585bfc381 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/subscribers" \
-H "Accept: application/json" \
    -d "email"="tanya.koepp@example.org" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/subscribers",
    "method": "POST",
    "data": {
        "email": "tanya.koepp@example.org"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/subscribers`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | email |  required  | 

<!-- END_dc9b4acc1f14d46bcf299d3585bfc381 -->

<!-- START_f9d530bb12a5b6536134807bcd49f19c -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/subscribers/{subscriber}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/subscribers/{subscriber}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/subscribers/{subscriber}`

`HEAD api/subscribers/{subscriber}`


<!-- END_f9d530bb12a5b6536134807bcd49f19c -->

<!-- START_1a37ba122fdd148cbff8f2541b4b36c6 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/subscribers/{subscriber}" \
-H "Accept: application/json" \
    -d "email"="christop95@example.net" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/subscribers/{subscriber}",
    "method": "PUT",
    "data": {
        "email": "christop95@example.net"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/subscribers/{subscriber}`

`PATCH api/subscribers/{subscriber}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    email | email |  required  | 

<!-- END_1a37ba122fdd148cbff8f2541b4b36c6 -->

<!-- START_78cbee28a60c5f6658d6439f5bec0a0a -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/subscribers/{subscriber}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/subscribers/{subscriber}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/subscribers/{subscriber}`


<!-- END_78cbee28a60c5f6658d6439f5bec0a0a -->

<!-- START_518f22795b28f9d2d239e76b741091da -->
## method used to return tags list

> Example request:

```bash
curl -X GET "http://localhost/api/tags" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/tags",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/tags`

`HEAD api/tags`


<!-- END_518f22795b28f9d2d239e76b741091da -->

<!-- START_6b95d7d1e0e5c34dd24d290bc715dccb -->
## method used to store new tag and return

> Example request:

```bash
curl -X POST "http://localhost/api/tags" \
-H "Accept: application/json" \
    -d "title"="sed" \
    -d "slug"="sed" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/tags",
    "method": "POST",
    "data": {
        "title": "sed",
        "slug": "sed"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/tags`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 

<!-- END_6b95d7d1e0e5c34dd24d290bc715dccb -->

<!-- START_e59c8d2c057a81f9a3c941d387dfd40c -->
## method used to return tag

> Example request:

```bash
curl -X GET "http://localhost/api/tags/{tag}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/tags/{tag}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/tags/{tag}`

`HEAD api/tags/{tag}`


<!-- END_e59c8d2c057a81f9a3c941d387dfd40c -->

<!-- START_a4a8a57c60acc8638ef566d690878aca -->
## method used to update tag and return

> Example request:

```bash
curl -X PUT "http://localhost/api/tags/{tag}" \
-H "Accept: application/json" \
    -d "title"="ducimus" \
    -d "slug"="ducimus" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/tags/{tag}",
    "method": "PUT",
    "data": {
        "title": "ducimus",
        "slug": "ducimus"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/tags/{tag}`

`PATCH api/tags/{tag}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    title | string |  required  | 
    slug | string |  required  | 

<!-- END_a4a8a57c60acc8638ef566d690878aca -->

<!-- START_4a7e5df1eb6e21ac01a7ea9dbd9bf710 -->
## method used to destroy tag

> Example request:

```bash
curl -X DELETE "http://localhost/api/tags/{tag}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/tags/{tag}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/tags/{tag}`


<!-- END_4a7e5df1eb6e21ac01a7ea9dbd9bf710 -->

<!-- START_cf4e254c1eaf508cce4668c34d271a8e -->
## method used to search tags paginate by 50

> Example request:

```bash
curl -X POST "http://localhost/api/tags/search" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/tags/search",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/tags/search`


<!-- END_cf4e254c1eaf508cce4668c34d271a8e -->

<!-- START_da5727be600e4865c1b632f7745c8e91 -->
## method used to show users paginate by 50

> Example request:

```bash
curl -X GET "http://localhost/api/users" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/users`

`HEAD api/users`


<!-- END_da5727be600e4865c1b632f7745c8e91 -->

<!-- START_12e37982cc5398c7100e59625ebb5514 -->
## method used to store new user and return

> Example request:

```bash
curl -X POST "http://localhost/api/users" \
-H "Accept: application/json" \
    -d "name"="ut" \
    -d "email"="nakia.mcclure@example.org" \
    -d "password"="ut" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users",
    "method": "POST",
    "data": {
        "name": "ut",
        "email": "nakia.mcclure@example.org",
        "password": "ut"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/users`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    email | email |  required  | 
    password | string |  required  | Minimum: `6`

<!-- END_12e37982cc5398c7100e59625ebb5514 -->

<!-- START_8f99b42746e451f8dc43742e118cb47b -->
## method used to return user

> Example request:

```bash
curl -X GET "http://localhost/api/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/{user}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "message": "Too Many Attempts.",
    "exception": "Illuminate\\Http\\Exceptions\\ThrottleRequestsException",
    "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
    "line": 122,
    "trace": [
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Middleware\\ThrottleRequests.php",
            "line": 52,
            "function": "buildException",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 667,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 642,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 608,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Router.php",
            "line": 597,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-debugbar\\src\\Middleware\\InjectDebugbar.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Debugbar\\Middleware\\InjectDebugbar",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\fideloper\\proxy\\src\\TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\barryvdh\\laravel-cors\\src\\HandlePreflight.php",
            "line": 35,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Routing\\Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Pipeline\\Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Http\\Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 116,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\AbstractGenerator.php",
            "line": 98,
            "function": "callRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Generators\\LaravelGenerator.php",
            "line": 58,
            "function": "getRouteResponse",
            "class": "Mpociot\\ApiDoc\\Generators\\AbstractGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 261,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Generators\\LaravelGenerator",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\mpociot\\laravel-apidoc-generator\\src\\Mpociot\\ApiDoc\\Commands\\GenerateDocumentation.php",
            "line": 83,
            "function": "processLaravelRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Container\\Container.php",
            "line": 564,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 184,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Command\\Command.php",
            "line": 251,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Command.php",
            "line": 171,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 886,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\symfony\\console\\Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Console\\Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\vendor\\laravel\\framework\\src\\Illuminate\\Foundation\\Console\\Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "D:\\wamp\\www\\marie\\artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/users/{user}`

`HEAD api/users/{user}`


<!-- END_8f99b42746e451f8dc43742e118cb47b -->

<!-- START_48a3115be98493a3c866eb0e23347262 -->
## method used to update user and return

> Example request:

```bash
curl -X PUT "http://localhost/api/users/{user}" \
-H "Accept: application/json" \
    -d "name"="cum" \
    -d "email"="ole99@example.net" \
    -d "password"="cum" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/{user}",
    "method": "PUT",
    "data": {
        "name": "cum",
        "email": "ole99@example.net",
        "password": "cum"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/users/{user}`

`PATCH api/users/{user}`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    name | string |  required  | 
    email | email |  required  | 
    password | string |  optional  | Minimum: `6`

<!-- END_48a3115be98493a3c866eb0e23347262 -->

<!-- START_d2db7a9fe3abd141d5adbc367a88e969 -->
## method used to destroy user

> Example request:

```bash
curl -X DELETE "http://localhost/api/users/{user}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/{user}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/users/{user}`


<!-- END_d2db7a9fe3abd141d5adbc367a88e969 -->

<!-- START_3b3cb7c05bffd1433d275fa0be58011a -->
## method used to change user password

> Example request:

```bash
curl -X POST "http://localhost/api/users/{id}/change-password" \
-H "Accept: application/json" \
    -d "oldpassword"="ut" \
    -d "password"="ut" \

```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/users/{id}/change-password",
    "method": "POST",
    "data": {
        "oldpassword": "ut",
        "password": "ut"
},
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/users/{id}/change-password`

#### Parameters

Parameter | Type | Status | Description
--------- | ------- | ------- | ------- | -----------
    oldpassword | string |  required  | Minimum: `6`
    password | string |  required  | Minimum: `6`

<!-- END_3b3cb7c05bffd1433d275fa0be58011a -->

