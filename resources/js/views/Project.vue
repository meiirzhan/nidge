<template>
    <div class="row-wo-mg main-part">
      <ImagePart :src="projects[activeProjectId].image" />
      <ProjectTextPart
        :project="projects[activeProjectId]"
        :projects="projects"
         />
    </div>
</template>

<script>
    import ImagePart from "../components/ImagePart";
    import ProjectTextPart from "../components/ProjectTextPart";

    export default {
        components: {
          ImagePart,
          ProjectTextPart
        },
        data: function () {
          return {
            projects: [
              {
                image: '/img/projects/1.png',
                title: "CRM Система для EVENT агенств",
                subtitle: "Разработано 2017 году",
                link: "waultr.com",
                reviewText: "Ребята круто разработали систему что облегчало нам работу с управлением мероприятии",
                authorName: "Ахметов Темирлан",
                authorCompany: "Директор DelphinAgency",
                authorAvatar: "/img/projects/1_author.png"
              },
              {
                image: '/img/main.jpg',
                title: "CRM Система для Автоломбарадов",
                subtitle: "Разработано 2018 году",
                link: "automoney.com",
                reviewText: "Ребята круто разработали систему что облегчало нам работу с управлением мероприятии",
                authorName: "Бауыржан Бирбале",
                authorCompany: "Директор DelphinAgency",
                authorAvatar: "/img/projects/1_author.png"
              },
              {
                image: '/img/projects/1.png',
                title: "Портал для тур покупок",
                subtitle: "Разработано 2017 году",
                link: "waultr.com",
                reviewText: "Ребята круто разработали систему что облегчало нам работу с управлением мероприятии",
                authorName: "Ахметов Темирлан",
                authorCompany: "Директор DelphinAgency",
                authorAvatar: "/img/projects/1_author.png"
              },
              {
                image: '/img/projects/1.png',
                title: "CRM Система для EVENT агенств",
                subtitle: "Разработано 2017 году",
                link: "waultr.com",
                reviewText: "Ребята круто разработали систему что облегчало нам работу с управлением мероприятии",
                authorName: "Ахметов Темирлан",
                authorCompany: "Директор DelphinAgency",
                authorAvatar: "/img/projects/1_author.png"
              },
              {
                image: '/img/projects/1.png',
                title: "CRM Система для Автоломбарадов",
                subtitle: "Разработано 2018 году",
                link: "automoney.com",
                reviewText: "Ребята круто разработали систему что облегчало нам работу с управлением мероприятии",
                authorName: "Бауыржан Бирбале",
                authorCompany: "Директор DelphinAgency",
                authorAvatar: "/img/projects/1_author.png"
              },
              {
                image: '/img/projects/1.png',
                title: "Портал для тур покупок",
                subtitle: "Разработано 2017 году",
                link: "waultr.com",
                reviewText: "Ребята круто разработали систему что облегчало нам работу с управлением мероприятии",
                authorName: "Ахметов Темирлан",
                authorCompany: "Директор DelphinAgency",
                authorAvatar: "/img/projects/1_author.png"
              }
            ],
            projectId: 0
          }
        },
        computed: {
          activeProjectId: function() {
            let projectId = this.$route.params.projectId;
            return typeof projectId === 'undefined' && !this.projects[projectId] ? this.projectId : projectId;
          }
        },
        mounted() {
          console.log(this.$route.params.projectId);
        }
    }
</script>

<style scoped>
  .main-part {
    height: 100vh;
  }
</style>
