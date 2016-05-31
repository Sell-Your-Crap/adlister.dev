<?php
$_ENV = include __DIR__ . '/../../.env.php';
require_once __DIR__ . '/../../models/Ads.php';
$ad= new Ads;
$ad->user_id = 1;
$ad->name = 'Mattress';
$ad->description = 'Buy a mattress set here and get a free night stand for your room.';
$ad->price = $800.97; 
$ad->img_url = '/img/1nightstand.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Gym Bag';
$ad->description = 'Brand new. Never used. Adidas gym bag'; 
$ad->price = $22.63; 
$ad->img_url = '/img/adidasbag.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Helicopter';
$ad->description = 'Really Big Blackhawk CH-30 Russian Gunship Helicopter.'; 
$ad->price = $1,245,321.42;
$ad->img_url = '/img/blackhawk.jpg'; 
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Classic BMW';
$ad->description = 'Yes, the same one Urcle had in Family Matters.';
$ad->price = $632.99;
$ad->img_url = '/img/bmwclassic.jpg'; 
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Breakfast Buddy';
$ad->description = 'Cook it all at once! No seperate dishes or pans here.'; 
$ad->price = $13.45;
$ad->img_url = '/img/breakfast.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Breath Freshner';
$ad->description = 'Try our breathe mints, you\'ll thank us.'; 
$ad->price = $2.22; 
$ad->img_url = '/img/breathesmints.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Chikuns';
$ad->description = 'Chikuns fur sell, cume an bye tu git yuo sem.';
$ad->price = $27.64; 
$ad->img_url = '/img/chikuns.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Circumcision Trainer';
$ad->description = 'Like new, minimal use. Great for residents in this field.';
$ad->price = $342.77; 
$ad->img_url = '/img/circumcisiontrainer.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Coach Purse';
$ad->description = 'Brand new. Never used. Coach purse.';
$ad->price= $222.71;
$ad->img_url = '/img/coachpurse.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Limited Edition Converse';
$ad->description = 'Limited Edition Converse Shoes, size 11.5 womens.';
$ad->price= $38.50;
$ad->img_url= '/img/converselimited.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Desk Buddy';
$ad->description = 'Let desk buddy do all the dirty work for you.'; 
$ad->price = $56.56; 
$ad->img_url= '/img/deskbuddy.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Restruant For Sale';
$ad->description = 'Dicks restruant for sale by owner.'; 
$ad->price = $505,207.79; 
$ad->img_url= '/img/dickssale.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Building For Lease';
$ad->description = 'Building is for lease. 22,000 sq.ft.'; 
$ad->price = $5,000.01;
$ad->img_url= '/img/forlease.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Free DVDs';
$ad->description = 'Mom caught my Step Dad watching these, all must go today. FREE!'; 
$ad->price = $free; 
$ad->img_url= '/img/freeporncollection.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Fixer-Upper';
$ad->description = 'Great Project car. Make offer.';
$ad->price= $200.00;
$ad->img_url= '/img/halfofcar.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Fat Wad';
$ad->description = 'Perfect for nutritionist to show clients the serious side of being obese. Make offer.';
$ad->price= $142.48;
$ad->img_url= '/img/humanfat.png';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Iphone';
$ad->description = 'Rarely used original IPHONE. No low ballers! Cash only!';
$ad->price= $205.09;
$ad->img_url= '/img/iphone.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Ipod Dock';
$ad->description = 'Now you can dock your device and jam while on your thrown.';
$ad->price= $37.77;
$ad->img_url= '/img/ipoddock.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Lake Front Property';
$ad->description = 'New lake front residential area. You will have the joys of living near the water and the comforts of the city.';
$ad->price= $305,708.11;
$ad->img_url= '/img/lakefrontproperty.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Laptop 4 Sale';
$ad->description = 'Slightly damaged laptop, running windows 98\'.';
$ad->price= $20.20; 
$ad->img_url= '/img/laptop.jpg'; 
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Louis Vuitton Wallet';
$ad->description = 'Great wallet for that special man in your life.'; 
$ad->price= $600.60;
$ad->img_url= '/img/louisvuittonwallet.jpg'; 
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Drum of Lube';
$ad->description = 'Perfect for your dorm room, or frat house!';  
$ad->price= $45.99;  
$ad->img_url= '/img/lube.png';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Lucky the Dog';
$ad->description = 'Blind, 3 legged, and deaf dog seeks forever home.';
$ad->price= $10.15;
$ad->img_url= '/img/luckydog.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Macbook Pro';
$ad->description = 'Macbook Pro, running Windows NT, great starter PC.';
$ad->price= $1,298.97;
$ad->img_url= '/img/mac.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Need New Glasses';
$ad->description = 'Looks like you need a new prescription. Stop by Dr. Feilgud\'s today!';
$ad->price= $102.22;
$ad->img_url= '/img/needglasses.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Nintendo Wii';
$ad->description = 'Have a lot of Wii\'s im trying to unload. Make offer';
$ad->price= $199.64;
$ad->img_url= '/img/nintendowii.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Cute Pullover';
$ad->description = 'It\'s the panda pull over. Just great for that ugly sweater party.';
$ad->price= $4.99;
$ad->img_url= '/img/pandapullover.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Women\'s Underwear';
$ad->description = 'Like new, worn once(or twice) 1 pair is brand new.';
$ad->price= $;
$ad->img_url= '/img/panties.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Playstation';
$ad->description = 'Selling my playstation, brand new in box. have some games too. hit me up.';
$ad->price= $349.77;
$ad->img_url= '/img/playstation.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Port-A-Chair';
$ad->description = 'Gently used Port-A-Chair, some stains remain near the seat area.';
$ad->price= $562.32;
$ad->img_url= '/img/portachair.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Playstation PSP';
$ad->description = 'Play your favorite PSP games with this new in box PSP by Playstation.';
$ad->price= $148.60;
$ad->img_url= '/img/pspplaystation.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Quick Sale';
$ad->description = 'Quick sale, Move in ready. Furniture included, make offer soon, because this house will not last long.';
$ad->price= $205,476.01;
$ad->img_url= '/img/quickmoveinsale.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Rabits';
$ad->description = 'Rabites four sails, ate um\' or kaep um\' yore choose.';
$ad->price= $2.99;
$ad->img_url= '/img/rabits.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Scooter the dog';
$ad->description = 'Scooter the dog looking for his forever home.';
$ad->price == $20.78;
$ad->img_url = '/img/scooterdog.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Free Snowmen';
$ad->description = 'Free snowmen, some assembly required.';
$ad->price = $0.00;
$ad->img_url = '/img/snowmen.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Multiplayer Tetris game';
$ad->description = 'Never be bored again on a rainy day.';
$ad->price = $12.77;
$ad->img_url = '/img/tetrisgame.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad-> name = 'Tiny the dog';
$ad->description = 'Tiny the dog is looking for his forever home.';
$ad->price = $203.03; 
$ad->img_url = '/img/tinythedog.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Classic Truck';
$ad->description = 'Classic, has very few number of parts missing. Great for person who wants to learn how to assymble a vehicle.';
$ad->price = $10,738.88;
$ad->img_url =  '/img/truck.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = '32" TV 4 sale';
$ad->description = '32 in. TV for sale. Has great 420p resolution and comes with oem remote.';
$ad->price = $47.74;
$ad->img_url = '/img/tv.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Unicorn Meat'; 
$ad->description  = 'Unique, one off exotic specialty canned meats. Every can comes with a letter of Authenticity.';
$ad->price = $1,000,000.03;  
$ad->img_url = '/img/unicornmeat.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Uranium Ore';
$ad->description = 'For the nuclear physicist in your life.';
$ad->price = $75,000.00;
$ad->img_url = '/img/uraniumore.png';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Used Cows';
$ad->description = 'You read it right. These heffers were well taken care of and ready for sale.';
$ad->price = $150.42;
$ad->img_url = '/img/usedcows.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Yard Gnomes';
$ad->description = 'Fraternity selling our yard gnomes. Buy one get 2 free!';
$ad->price= $17.89;
$ad->img_url= '/img/yardnomes.jpg';
$ad->save();
$ad= new Ads; 
$ad->user_id = 1; 
$ad->name = 'Yard Sale';
$ad->description = 'Another one bites the dust. Come take advantage of these prices, they are to die for!';
$ad->price = $0.00;
$ad->img_url = '/img/yardsale.jpg';
$ad->save();