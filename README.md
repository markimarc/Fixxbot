# Fixxbot
Een simpele php Telegram Bot.
Zie hem live in werking op Telegram ([@Fixxbot](https://telegram.me/fixxbot)) of in de [#Whutte](https://telegram.me/whutte) groep!

## Maak je eigen bot
Als allereerst, je moet een paar dingen hebben:
- Een domein (IP-Adres is natuurlijk ook goed. Maar ik heb het hier niet mee geprobeerd.)
- Een webserver (Een normale server, of zelfs een pc, is ook goed. Echter heb ik het hier niet mee geprobeerd.)
- Een SSL-Certificaat (HTTPS) Zonder dit werkt de bot niet. 
- Basis kennis van PHP
- Geduld.. Genoeg geduld

Heb je alles wat hierboven staat? Top. Dan kan je beginnen!

1. Download alles naar je pc via de knop hier rechtsbovenin 'Clone or download' en dan 'Download ZIP'.
2. Unzip alles in een mapje.
3. Open je Telegram en start de @BotFather bot op Telegram.
4. Maak een nieuwe bot aan met /newbot en volg de stappen totdat je een HTTP API key hebt gekregen, zoals hier: 
![BotFather](http://i.imgur.com/msYJeqe.png)
5. Je kan ook nog de bot privacy aanpassen, dit heb ik ook gedaan zodat de bot ook kan reageren op berichten in groepen zonder de/een /command.
6. Upload het mapje met je favoriete FTP client bijv.. Filezille wat je bij stap2 hebt geunzipt naar je webserver. Ik draai mijn bot in een dir met de naam 'telegram-bot', Dus https://example.com/telegram-bot/. Je kan natuurlijk ook een andere dir gebruiken, maar dit lijkt mij de beste.
7. Verander de naam van api.example.php naar api.php
8. Open de api.php en voer je API Key in wat je bij stap 4 hebt gekregen en sla 'm op.
9. Ga naar https://api.telegram.org/bot[JeAPIKEY]/setwebhook?url=[LINKNAARJEbot.php] Voorbeeld; https://api.telegram.org/bot300633604:APIKEY/setwebhook?url=https://example.nl/telegram-bot/bot.php 
10. Zoek naar je bot in telegram en druk op de start knop.
11. Gefeliciteerd! Je bot werkt! 
12. Pas alles naar je eigen voorkeur aan wat je wilt, en stuur mij even een pb op telegram ([@marcleanne](https://telegram.me/marcleanne)) met je @ van de bot, ik ben benieuwd wat je ervan hebt gemaakt :).

Als iets niet lukt, kan je mij altijd op Telegram een bericht sturen ([@marcleanne](https://telegram.me/marcleanne) of een [Issue aanmaken](https://github.com/markimarc/Fixxbot/issues).

## Met dank aan

- [@CirkeltrekBot](https://github.com/Maartenwut/CirkeltrekBot) (Maarten)
- [@Deleannebot](https://telegram.me/deleannebot) (Leanne)
- Rick
- Ticho
