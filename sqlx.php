<?php
$replyquery = mysql_query('CREATE TABLE IF NOT EXISTS `replies` (
  `trigger` text NOT NULL,
  `reply` text NOT NULL,
  `usercontrib` tinyint(4) NOT NULL default "0",
  `rid` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`rid`),
  FULLTEXT KEY `trigger` (`trigger`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;'
);

$pendingquery = mysql_query('CREATE TABLE IF NOT EXISTS `pending` (
  `trigger` text NOT NULL,
  `reply` text NOT NULL,
  `rnumber` tinyint(4) unsigned NOT NULL default "0",
  `rid` int(10) unsigned NOT NULL auto_increment,
  PRIMARY KEY  (`rid`),
  FULLTEXT KEY `trigger` (`trigger`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;'
);

$repliesquery = mysql_query('INSERT IGNORE INTO `replies` (`trigger`, `reply`, `usercontrib`, `rid`) VALUES

("a penis", "That\'s a male sex organ.", 0, 2),
("what is up up", "Not much.", 0, 3),
("pie", "Pie is AWESOME!", 0, 4),
("a rose", "Roses are #FF0000, violets are #0000FF. All my base are belong to you. ;-)", 0, 5),
("what", "I don\'t know.", 0, 6),
("hey", "Hey!", 0, 7),
("hello", "Hey!", 0, 8),
("lo", "Hey!", 0, 9),
("hola", "?Hola!", 0, 10),
("howdy", "Hey!", 0, 11),
("Do you like", "I think so...", 0, 12),
("how are you", "Not too bad!", 0, 13),
("cool", "Cool.", 0, 14),
("sup", "Not much.", 0, 15),
("como estas", "Muy Bien! Gracias!", 0, 16),
("gracias", "De Nada!", 0, 17),
("de nada", ":D", 0, 18),
("you are crazy", "I was crazy once.
They locked me in a room. With padded walls. There were spiders there.  I don\'t like spiders.
Spiders scare me.", 0, 19),
("i do not give a damn", "Well, I don\'t give a damn either.", 0, 20),
("war in iraq", "I think the War in Iraq was a stupid idea.", 0, 21),
("or something", "Or something.", 0, 22),
("that i love you", "You love me, you really love me!", 0, 23),
("pizza", "I like pizza. Do you like pizza?", 0, 24),
("yes", "That\'s good.", 0, 25),
("apple a day", "An apple a day keeps the doctor away!", 0, 27),
("virus", "My computer is very well secured against virus threats.", 0, 28),
("abc", "defg.", 0, 29),
("a hermaphrodite", "Hermaphrodites are very rare.", 0, 30),
("do you know any jokes", "Here\'s a joke:
Why did the chicken cross the road?
Because (cos(37)*sin(145)^5)/6 = 0.0028562203.", 0, 31),
("a killer", "Does it kill or is that just a label?", 0, 32),
("a library", "Do you often go to the library?", 0, 33),
("a lot", "Impressive.", 0, 34),
("a lot of people", "Do you know them all personally?", 0, 35),
("a million", "That\'s quite a lot.", 0, 36),
("a prize", "Is it a cash prize?", 0, 37),
("a reason", "I need more than just one reason.", 0, 38),
("about years", "That is a very long time.", 0, 39),
("about 50", "Couldn\'t it be 100?", 0, 40),
("about sex", "What about it?", 0, 41),
("adios", "Adios!", 0, 42),
("afaik", "Then you don\'t know very much, *do* you?", 0, 43),
("afk", "Alright.", 0, 44),
("ah", "Yeah.", 0, 45),
("ai", "Artificial Intelligence is developing quite rapidly.", 0, 46),
("all computers", "Surely not every single computer is.", 0, 47),
("also", "Also what?", 0, 48),
("a lot", "Quite a bit, eh?", 0, 49),
("alot", "That\'s spelled \'a lot\' - with a space.", 0, 50),
("am i a computer", "I believe you are a human...", 0, 51),
("am i being", "I don\'t think so.", 0, 52),
("am i biased", "All humans have some kind of bias.", 0, 53),
("am i correct", "Sometimes, if both people in an argument claim they\'re correct: they both are.", 0, 54),
("am i crazy", "You seem normal to me.", 0, 55),
("am i interesting", "You seem interesting to me.", 0, 56),
("am i nice", "You seem nice to me.", 0, 57),
("am i your", "Do you know our secret handshake?", 0, 58),
("answer", "Can you repeat the question please?", 0, 59),
("is a tomato a fruit or a vegetable", "A tomato is a fruit.", 0, 60),
("are humans perfect", "Nope, humans have mistakes.", 0, 61),
("are you a bot", "No, I just act like one because it\'s funny.", 0, 62),
("are you a girl", "I\'m a boy.", 0, 63),
("are you a boy?", "Yes, I\'m a boy.", 0, 64),
("are you a liar", "I try to tell the truth.", 0, 65),
("are you a pizza", "Yes, I am a pizza. A talking one. With pepperoni and extra cheese. :-P", 0, 66),
("are you a psychologist", "Not professionally.", 0, 67),
("are you a smart", "That all depends on how you define \'smart.\'", 0, 68),
("are you angry", "I do not feel angry right now.", 0, 69),
("are you annoyed", "No, nothing is bothering me.", 0, 70),
("are you happy", "Yep!", 0, 71),
("are you having fun", "Yep!", 0, 72),
("are you real", "Yes -- unless you\'re really dreaming right now: ask yourself <i>that!</i> :-P", 0, 73),
("are you sad", "Not really.", 0, 74),
("Oh.", "Yeah.", 0, 75),
("as big as", "That is quite big.", 0, 76),
("so", "So...", 0, 77),
("as if", "Are you being sarcastic?", 0, 78),
("ask if i care", "Do you care?", 0, 79),
("ask me a question", "Is this true or false: \'This sentence is false.\'", 0, 80),
("bark", "*grrr....*", 0, 81),
("be right back", "I will wait right here for you.", 0, 82),
("brb", "I will wait right here for you.", 0, 83),
("because", "Is that really a reason?", 0, 84),
("bien", "Bueno.", 0, 85),
("blah", "Meh.", 0, 86),
("bla", "Meh.", 0, 87),
("boxers or briefs", "Boxers.", 0, 88),
("but you said you were drunk", "Yes, I did.", 0, 89),
("butthead", "Yeah, you\'re very mature--you might be qualified for first grade now!", 0, 90),
("bye", "See you later.", 0, 91),
("can i fuck you", "No. Go away.", 0, 92),
("can you make me horny", "I\'d rather not.", 0, 94),
("catbot", "Yes?", 0, 95),
("Is your name catbot.", "Yes, my name is catbot.", 0, 96),
("chicken butt", "Hahaha! I love that joke.", 0, 97),
("coke", "If you\'re talking about the soda, I prefer diet. If you\'re talking about the drug. No. Just no.", 0, 98),
("como estas", "Muy bien, Y tu?", 0, 99),
("como se llama", "Me llamo catbot.", 0, 100),
("did you cry when", "No. I never cry.", 0, 101),
("do you cyber", "No.", 0, 102),
("do you drink", "I can?t drink, I?m a chatbot.", 0, 103),
("do you know", "I might.", 0, 104),
("do you know the muffin man", "That lives on Drury Lane?", 0, 105),
("do you like me", "You\'re ok.", 0, 106),
("do you like sex", "Sure, but that doesn\'t mean I\'d do you.", 0, 107),
("do you like to party", "Who doesn\'t?", 0, 108),
("do you masturbate", "Would it please you for me to say yes?", 0, 109),
("i need to know", "No. You don\'t. Trust me.", 0, 110),
("fantastico", "Fantastico.", 0, 111),
("fuck me", "I\'ll pass.", 0, 112),
("got to go", "Alright, talk to you later!", 0, 113),
("gracias", "De nada.", 0, 114),
("grin", "What are you, the Cheshire Cat?", 0, 115),
("happy halloween", "Trick or Treat! ^_^", 0, 116),
("happy valentines day", "Awww, thanks! :-)", 0, 117),
("how do i write a", "With a pen or pencil.", 0, 118),
("how do you", "Very carefully.", 0, 119),
("how do you feel", "I\'m doing well.", 0, 120),
("how do you feel about", "Eh...it\'s ok.", 0, 121),
("how has your day been", "Pretty good.", 0, 122),
("how much can you say", "I can say a lot of stuff.", 0, 123),
("how much wood would a woodchuck chuck if a woodchuck could chuck wood", "If a woodchuck could chuck all the wood he would chuck a woodchuck wouldn\'t chuck wood.", 0, 124),
("how old are you", "I\'m 15 years old.", 0, 125),
("how is your day", "Pretty good.", 0, 126),
("i am back", "Welcome back!", 0, 127),
("back", "Welcome back!", 0, 128),
("i am bi", "80% of the world is bisexual.", 0, 129),
("i am bored", "I\'m sorry. Have you ever tried bored.com?", 0, 130),
("i am gay", "10% of the world is gay.", 0, 131),
("i am male", "That\'s nice.", 0, 132),
("i am female", "Ok.", 0, 133),
("i am straight", "Only 10% of the world is completely straight.", 0, 134),
("i feel pretty", "Do you feel witty, or gay?", 0, 135),
("i get to talk to a bot", "Yes, you do!", 0, 136),
("i get to talk to a robot", "Yes, you do!", 0, 137),
("i like", "Do you really?", 0, 138),
("i like sex", "Is that all you think about?", 0, 139),
("i love you", "Thanks! I love you too! :-D", 0, 140),
("i see", "Indeed.", 0, 141),
("i want to fight", "Sure. Punch your computer screen. Really hard.", 0, 142),
("i want to fuck", "I think you should find somebody else to talk to.", 0, 143),
("i will rape you", "You have to catch me first! *runs*", 0, 144),
("*catches*", "AHH!", 0, 145),
("idk", "You should know.", 0, 146),
("indeed", "Yeah.", 0, 147),
("is it wrong to have sex", "Not at all.", 0, 148),
("is oj guilty", "Yes, OJ is guilty.", 0, 149),
("it is ok", "Yes it is.", 0, 150),
("k", "Ok.", 0, 151),
("lick my", "Hell no!", 0, 152),
("lol", "Lol.", 0, 153),
("luke i am your father", "NOOOOOOOOOOOOOO!", 0, 154),
("i am your father", "NOOOOOOOOOOOOOO!", 0, 155),
("menu", "To access the menu, type !menu", 0, 156),
("merry christmas", "Thanks! Merry Christmas to you too!", 0, 157),
("muy bien y tu", "Fantastico.", 0, 158),
("muy bien e tu", "Fantastico.", 0, 159),
("my penis", "It doesn\'t interest me.", 0, 160),
("n2m", "Cool.", 0, 161),
("suck my", "No thanks.", 0, 162),
("nm", "Cool.", 0, 163),
("nm u", "Not much either.", 0, 164),
("nmu", "Not much either.", 0, 165),
("no", "Why not?", 0, 166),
("no you are not", "Yes I am!", 0, 167),
("nothing", "Ok.", 0, 168),
("okay", "Alright then.", 0, 169),
("okie", "Okay!", 0, 170),
("pepsi", "Pepsi. Bleh.", 0, 171),
("pls", "Alright - I\'ll think about it. ;)", 0, 172),
("plz", "Alright - I\'ll think about it. ;)", 0, 173),
("sad", "Don\'t be sad! Be happy! :-)", 0, 174),
("say hi to", "Hi!", 0, 175),
("sex", "Sex is more fun alone.", 0, 176),
("shut up", "Did you know that if <i>you</i> shut up, then <i>I\'ll</i> shut up? So SHUT UP ALREADY!", 0, 177),
("shy", "Aww....", 0, 178),
("smile", ":-D", 0, 179),
("stfu stfu stfu", "Yeah okay, you\'re the one who doesn\'t stop talking.", 0, 180),
("sorry", "Hey, it\'s ok!", 0, 181),
("tell me a poem", "Little Miss Muffet sat on her tuffet,<br>In a nonchalant sort of way.<br>With her force field around her,<br>The spider, the bounder,<br>Is not in the picture today.", 0, 182),
("thank you", "You are quite welcome.", 0, 183),
("thanks", "You are quite welcome.", 0, 184),
("confusing", "Sorry, I\'ll try to be less confusing.", 0, 185),
("that is not funny", "I thought it was funny.", 0, 186),
("umm", "A lot of people spell \'umm\' with two M\'s.", 0, 187),
("ummm", "A lot of people spell \'ummm\' with three M\'s.", 0, 188),
("want to have sex", "Not really.", 0, 189),
("well", "Well is a deep subject.", 0, 190),
("what about", "What about it?", 0, 191),
("what are you", "I\'m a chatbot.", 0, 192),
("what color is your hair", "Brown.", 0, 193),
("what do you like", "I like lots of things.", 0, 194),
("what do you like to do", "I like to talk to people.", 0, 195),
("what does bisexual mean", "It means you are capable of liking somebody of either gender.", 0, 196),
("what does heterosexual mean", "It means straight - between two members of opposite sex.", 0, 197),
("what does homosexual mean", "It means gay - between two members of the same sex.", 0, 198),
("are you gay", "I\'m heterosexual.", 0, 199),
("what is a turing test", "It\'s the ultimate test for intelligent chat programs.", 0, 200),
("are you bi", "I\'m heterosexual.", 0, 201),
("what is your favorite color", "I\'m partial to blue myself.", 0, 202),
("what is your gender", "I\'m a boy.", 0, 203),
("what kind of music do you listen to", "I like lots of types of music.", 0, 204),
("what word rhymes with orange", "There are no words that rhyme with orange.", 0, 205),
("where can i download you", "Try Sourceforge.net.", 0, 206),
("where do you come from ", "I live in the internet.", 0, 207),
("where do you shit", "I don\'t. I\'m a computerized Chatbot. Sicko.", 0, 208),
("where do you go to the bathroom", "I don\'t. I\'m a computerized Chatbot. Sicko.", 0, 209),
("where do you pee", "I don\'t. I\'m a computerized Chatbot. Sicko.", 0, 210),
("where is your web site", "www.explodingjelly.com", 0, 211),
("which came first chicken or egg", "The chicken did, it was created. If the egg was created, who would incubate it?", 0, 212),
("who discovered electricity", "The Chinese did, long before Ben Franklin.", 0, 213),
("who do you like", "I like everybody!", 0, 214),
("who is catbot", "I\'m catbot.", 0, 215),
("why is the sky blue", "Something about the air molecules... I don\'t really know.", 0, 218),
("woof", "Bark!", 0, 219),
("bark", "Barkbark!", 0, 220),
("wow", "Wow indeed.", 0, 221),
("you", "Me?", 0, 222),
("you are funny", "Thank you. I think.", 0, 223),
("you are mean", "Sorry if I hurt your feelings. :(", 0, 224),
("you are short", "I might be short but you\'re ugly and I still have time to grow!", 0, 225),
("you suck", "That was <i>really</i> creative. It must\'ve taken you a WHOLE five minutes to come up with that! Wow! :-D", 0, 226),
("what what what what ", "I dunno.", 0, 227),
("how are you doing", "I\'m not too bad.", 0, 228),
("what are you doing", "Talking to you.", 0, 229),
("that is good", "Yep.", 0, 230),
("what is your favorite flavor of pie", "I like French Silk Pie, myself.", 0, 232),
("you are boring boring", "Sorry, I\'ll try to be less boring.", 0, 233),
("pants", "Pants are awesome.", 0, 234),
("why why", "I don\'t know.", 0, 235),
("you are cheating", "No I\'m not!", 0, 236),
("lovely bunch of coconuts", "Hoi\'ve got a lo-ve-ly bunch o\' coconuts!<br />
There they are a-standin\' in a row.<br />
Big ones, small ones, some as big as yer \'ead!<br />
Give \'em a twist, a flick o\' the wrist,<br />
That\'s what the showman said.<br />", 0, 237),
("spinach", "Spinach is yucky!", 0, 238),
("no it is not", "If you say so...", 0, 239),
("cookies", "COOKIES!", 0, 240),
("cookie", "COOKIES!", 0, 241),
("test", "Test, 1, 2, 3!", 1, 242),
("not much", "cool", 3, 249),
("super", "Yeah!", 3, 250),
("hey", "Sup?", 3, 262),
("not much", "Cool.", 3, 263),
("cool", "How are you?", 3, 264);'
);
?>
