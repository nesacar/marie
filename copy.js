const fs = require('fs');
const {join} = require('path');

const src = join(__dirname, '/resources/views/themes/marie-clarie/email/src');
const tmp = join(__dirname, '/resources/views/themes/marie-clarie/email/tmp');

// clean `tmp` directory.
fs.readdirSync(tmp)
  .forEach((file) => {
    fs.unlinkSync(`${tmp}/${file}`);
  });

// copy source files to the `tmp` directory.
fs.readdirSync(src)
  .forEach((file) => {
    const content = fs.readFileSync(`${src}/${file}`, 'utf8');
    const path = file.concat('.blade.php');
    fs.writeFileSync(`${tmp}/${path}`, content, 'utf8');
  });
