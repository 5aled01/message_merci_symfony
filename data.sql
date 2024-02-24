        
INSERT INTO user (email, roles, password) VALUES ('alice', '["ROLE_ADMIN"]', 'alice');
INSERT INTO user (email, roles, password) VALUES ('celine', '["ROLE_ADMIN"]', 'celine');
INSERT INTO user (email, roles, password) VALUES ('geoffroy', '["ROLE_ADMIN"]', 'geoffroy');
INSERT INTO user (email, roles, password) VALUES ('laetitia', '["ROLE_ADMIN"]', 'laetitia');
INSERT INTO user (email, roles, password) VALUES ('laura', '["ROLE_ADMIN"]', 'laura');
INSERT INTO user (email, roles, password) VALUES ('myriam', '["ROLE_ADMIN"]', 'myriam');

INSERT INTO message (content, sender, recipient, created_at, reason) VALUES ('Hello Alice!', 'geoffroy', 'alice', NOW(), 'No reason');
INSERT INTO message (content, sender, recipient, created_at, reason) VALUES ('Hi Geoffroy!', 'alice', 'geoffroy', NOW(), 'No reason');

INSERT INTO message (content, sender, recipient, created_at, reason) VALUES ('Hey Celine!', 'laetitia', 'celine', NOW(), 'No reason');
INSERT INTO message (content, sender, recipient, created_at, reason) VALUES ('Hi Laetitia!', 'celine', 'laetitia', NOW(), 'No reason');

INSERT INTO message (content, sender, recipient, created_at, reason) VALUES ('Hello Myriam!', 'laura', 'myriam', NOW(), 'No reason');
INSERT INTO message (content, sender, recipient, created_at, reason) VALUES ('Hi Laura!', 'myriam', 'laura', NOW(), 'No reason');
