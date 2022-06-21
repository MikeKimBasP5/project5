import { StyleSheet, Text, View } from 'react-native';

const LanguageScreen = () => {
  return (
    <View style={styles.container}>
      <Text style={styles.header}>Language / Taal</Text>
      <Text style={styles.text}>Choose a language.</Text>
      <Text style={styles.text}>Kies een taal.</Text>
      <Text style={styles.btn}>Nederlands</Text>
    </View>
  );
}

const styles = StyleSheet.create({
  container: {
    flex: 1,
    backgroundColor: 'white',
    alignItems: 'center',
  },
  header: {
    marginTop: 50,
    fontSize: 40,
    color: 'black',
  },
  text: {
    top: '5%',
    textAlign: 'center',
    color: 'black',
    fontSize: 30,
  },
  btn: {
    top: '30%',
    textAlign: 'center',
    color: 'black',
    backgroundColor: '#BBC7CE',
    borderRadius: 30,
    padding: 5,
    width: 250,
    fontSize: 30,
  }
});

export default LanguageScreen;