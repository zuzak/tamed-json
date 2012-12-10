JSON API implementation for http://www.aber.ac.uk/en/hospitality/hospitality-menu/ .

Usage
-----
#### From CLI:
```bash
$ php tamed-json.php meal=lunch
```
Optionally specify a date:
```bash
$ php tamed-json.php meal=dinner date=25102012
```
#### From CGI:
```bash
$ curl "http://example.org/tamed-json.php?meal=lunch&date=25102012"
```

Error codes
-----------
* 0 - Success
* 1 - Missing argument
* 2 - Invalid parameter
* 3 - Data not found.
* 4 - Error fetching data.

Example output
--------------
```json
{"status_code":0,"error":"","date":1351103814,"meal":"lunch","Main One":"Roast leg of lamb with mint sauce","Main Two":"Chicken breast with paprika with chickpeas","Soup Of The Day":"Broccoli and stilton\u00a0","Vegetarian One":"Welsh rarebit jacket potato","Vegetarian Two":"Thai red vegetable curry with rice","Theatre":"Ginger chicken with noodles","Potatoes":"Roast, chips, parsley potatoe","Vegetables":"Red cabbage, bean medley parsnips cauliflower"}
```
```json
{"status_code":3,"error":"Data not found"}
```

License
-------
> Copyright (c) 2012, nano <shinku@dollbooru.org>

> Permission to use, copy, modify, and/or distribute this software for any purpose with or without fee is hereby granted, provided that the above copyright notice and this permission notice appear in all copies.

> THE SOFTWARE IS PROVIDED "AS IS" AND THE AUTHOR DISCLAIMS ALL WARRANTIES WITH REGARD TO THIS SOFTWARE INCLUDING ALL IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS. IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY SPECIAL, DIRECT, INDIRECT, OR CONSEQUENTIAL DAMAGES OR ANY DAMAGES WHATSOEVER RESULTING FROM LOSS OF USE, DATA OR PROFITS, WHETHER IN AN ACTION OF CONTRACT, NEGLIGENCE OR OTHER TORTIOUS ACTION, ARISING OUT OF OR IN CONNECTION WITH THE USE OR PERFORMANCE OF THIS
SOFTWARE.
