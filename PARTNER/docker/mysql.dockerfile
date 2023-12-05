FROM mysql:8.0

ENV MYSQL_ROOT_PASSWORD=
ENV MYSQL_DATABASE=liberty_insurance_portal
ENV MYSQL_ALLOW_EMPTY_PASSWORD=
ENV MYSQL_RANDOM_ROOT_PASSWORD=

# COPY ./database/liberty_insurance_portal.sql /docker-entrypoint-initdb.d/