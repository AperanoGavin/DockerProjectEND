FROM tianon/exim4

RUN apt-get update && apt-get install -y exim4

EXPOSE 25
CMD ["exim", "-bd"]