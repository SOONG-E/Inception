
CDDIR = cd srcs &&

DB_PATH = app/db
WORDPRESSDB_PATH = app/wordpressdb

all :
	$(CDDIR) docker-compose up -d

up : all

down :
	$(CDDIR) docker-compose down

build :
	$(CDDIR) docker-compose up -d --build

clean:
	$(CDDIR) docker-compose down
	docker system prune -a

fclean : clean
	docker volume rm srcs_db
	docker volume rm srcs_wordpressdb
	rm -rf $(DB_PATH)/*
	rm -rf $(WORDPRESSDB_PATH)/*