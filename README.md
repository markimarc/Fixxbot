# Fixxbot
Een simpele telegram bot gebasseerd op [@CirkeltrekBot](https://github.com/Maartenwut/CirkeltrekBot) en [@Deleannebot](https://telegram.me/deleannebot)

## Hey, ik wil deze bot zelf gaan hosten en naar mijn eigen smaak of wat dan ook aanpassen. Hoe installeer ik hem?
Als allereerst, je moet een paar dingen hebben:
- Een domein (IP-Adres is natuurlijk ook goed. Maar ik heb het hier niet mee geprobeerd.)
- Een webserver (Een normale server, of zelfs een pc, is ook goed. Echter heb ik het hier niet mee geprobeerd.)
- Een SSL-Certificaat (HTTPS) Zonder dit werkt de bot niet. 
- Basis kennis van PHP
- Geduld.. Genoeg geduld

## Uitleg gebeuren
Heb je alles wat hierboven staat? Top. Dan kan je beginnen!

1. Download alles naar je pc via de knop hier rechtsbovenin 'Clone or download' en dan 'Download ZIP'.
2. Unzip alles in een mapje.
3. Open je Telegram en start de @BotFather bot op Telegram.
4. Maak een nieuwe bot aan met /newbot en volg de stappen totdat je een HTTP API key hebt gekregen, zoals hier: http://i.imgur.com/msYJeqe.png
5. Je kan ook nog de bot privacy aanpassen, dit heb ik ook gedaan zodat de bot ook kan reageren op berichten in groepen zonder de/een /command.
6. Upload het mapje wat je bij stap2 hebt geunzipt naar je webserver. Ik draai mijn bot in een dir met de naam 'telegram-bot', Dus https://example.com/telegram-bot/. Je kan natuurlijk ook een andere dir gebruiken, maar dit lijkt mij de beste.
7. Verander de naam van api.php.example naar api.php
8. Open de api.php en voer je API Key in wat je bij stap 4 hebt gekregen en sla 'm op.

Binnenkort meer, omdat dit schrijven ook tijd kost ;)

## Met dank aan

- [@CirkeltrekBot](https://github.com/Maartenwut/CirkeltrekBot) (Maarten)
- [@Deleannebot](https://telegram.me/deleannebot) (Leanne)
- Rick
- Ticho
