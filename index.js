const puppeteer = require('puppeteer');

console.log('Teste boot');

(async () => {
  const browser = await puppeteer.launch();
  const page = await browser.newPage();
  await page.goto('https://xvideos.com/account');
  await page.screenshot({ path: 'example.png' });

  await browser.close();
})();
