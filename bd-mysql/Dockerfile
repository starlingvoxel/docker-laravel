# Utiliza una imagen base de MySQL
FROM mysql:5.7

# Variables de entorno para configurar la base de datos, usuario y contraseña (ajusta según sea necesario)
ENV MYSQL_ROOT_PASSWORD=1170155
ENV MYSQL_DATABASE=crud
ENV MYSQL_USER=starling
ENV MYSQL_PASSWORD=1170155

# Exponer el puerto 3306 de MySQL (opcional, solo si necesitas acceso externo)
EXPOSE 3306

# Comando de inicio para MySQL
CMD ["mysqld"]

# init sql
COPY ./init.sql /docker-entrypoint-initdb.d/