let scrollToBottom = require("scroll-to-bottomjs");

describe('Percy.io snapshots', function() {

  test('Upload snapshots', function (browser) {
    var site_url = browser.globals.site_url;

    browser
      .url(site_url + '/resources')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources')

    browser
      .url(site_url + '/resources/category/news-updates/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/category/news-updates/')

    browser
      .url(site_url + '/resources/category/data-management/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/category/data-management/')

    browser
      .url(site_url + '/resources/category/tutorials/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/category/tutorials/')

    browser
      .url(site_url + '/resources/webhooks/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/webhooks/')

    browser
      .url(site_url + '/resources/welcome-emails/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/welcome-emails/')

    browser
      .url(site_url + '/resources/guides/lifecycle-marketing/promotional-emails/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/guides/lifecycle-marketing/promotional-emails/')

    browser
      .url(site_url + '/resources/guides/lifecycle-marketing/onboarding-emails/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/guides/lifecycle-marketing/onboarding-emails/')

    browser
      .url(site_url + '/resources/html-email-templates/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/html-email-templates/')

    browser
      .url(site_url + '/resources/50-email-newsletters/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/50-email-newsletters/')

    browser
      .url(site_url + '/resources/the-perfect-email/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/the-perfect-email/')

    browser
      .url(site_url + '/resources/mobile-push-notifications/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/mobile-push-notifications/')

    browser
      .url(site_url + '/resources/covid-19-marketing/')
      .waitForElementVisible('body')
      .execute(scrollToBottom({ timing: 10 }))
      .percySnapshot('/resources/covid-19-marketing/')

  });

  after(browser => browser.end());
});