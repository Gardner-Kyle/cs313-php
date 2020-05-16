create database quotes;

#Author Table
create table author
(
    id   serial      not null
        constraint author_pk
            primary key,
    name varchar(20) not null
);

alter table author
    owner to kylegardner;

create unique index author_id_uindex
    on author (id);

#Quote Table
create table quote
(
    id         serial  not null
        constraint quote_pk
            primary key,
    "authorId" integer not null
        constraint author_fk
            references author,
    "userId"   integer not null
        constraint user_fk
            references "user",
    quote      varchar(256)
);

alter table quote
    owner to kylegardner;

create unique index quote_id_uindex
    on quote (id);

#User Table
create table "user"
(
    username varchar(20) not null,
    password varchar(20) not null,
    id       serial      not null
);

alter table "user"
    owner to kylegardner;

create unique index user_id_uindex
    on "user" (id);

#Foreign Keys
alter table quotes.quote
	add constraint author_fk
		foreign key ("authorId") references quotes.author (id);

alter table quotes.quote
	add constraint user_fk
		foreign key ("userId") references quotes."user" (id);