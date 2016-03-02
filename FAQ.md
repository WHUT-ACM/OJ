
- Pending...

  判题程序judged需要用root帐号启动，请重启服务器或手动执行sudo judged。
  如果无效，请检查/home/judge/etc/judge.conf中的数据库账号配置，修正后再次重启服务器或执行sudo pkill -9 judged等待一会儿再执行sudo judged

- Input&Output data name

`Promblemid.in`
`Promblemid.out`

- chmod

`sudo chmod -R 777 /var/www/html`

- config

`./web/example.htacess`
`./web/application/config/base.sample.php`
`./web/application/config/production/database.sample.php`

- rewirte

ubuntu 14.04 LTS

`sudo a2enmod rewrite`
在 `/etc/apache2/site-enabled/000-default` 中添加

```
	<Directory /var/www/html>
		AllowOverride ALL
	</Directory>
```

